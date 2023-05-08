<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

/**
 * Class FileType
 * @package byteShard\Enum
 */
enum FileType: string
{
    case AI = 'ai';
    case BMP = 'bmp';
    case CAB = 'cab';
    case CSS = 'css';
    case CSV = 'csv';
    case DOC = 'doc';
    case EPS = 'eps';
    case EXE = 'exe';
    case FLV = 'flv';
    case GIF = 'gif';
    case HTM = 'htm';
    case HTML = 'html';
    case ICO = 'ico';
    case JPE = 'jpe';
    case JPEG = 'jpeg';
    case JPG = 'jpg';
    case JS = 'js';
    case JSON = 'json';
    case MOV = 'mov';
    case MP3 = 'mp3';
    case MSI = 'msi';
    case ODS = 'ods';
    case ODT = 'odt';
    case PDF = 'pdf';
    case PHP = 'php';
    case PNG = 'png';
    case PPT = 'ppt';
    case PS = 'ps';
    case PSD = 'psd';
    case QT = 'qt';
    case RAR = 'rar';
    case RTF = 'rtf';
    case SVG = 'svg';
    case SVGZ = 'svgz';
    case SWF = 'swf';
    case TIF = 'tif';
    case TIFF = 'tiff';
    case TXT = 'txt';
    case WAR = 'war';
    case XLS = 'xls';
    case XLSX = 'xlsx';
    case XML = 'xml';
    case ZIP = 'zip';

    //undefined
    case YML = 'yml';
    case YAML = 'yaml';
    case PPTX = 'pptx';
    case DOCX = 'docx';

    // certificate and key
    case CRT = 'crt';
    case P7B = 'p7b';
    case KEY = 'key';
    case ENC = 'enc';

    /**
     * @return array
     */
    public static function getFileTypes(): array
    {
        // default is used for finfo and http_header
        // default, finfo and http_header can be an array in case multiple mime types exist
        $mimeTypes = [];
        foreach (self::cases() as $extension) {
            $mimeType = match ($extension) {
                self::TXT                        => ['default' => 'text/plain'],
                self::HTM, self::HTML, self::PHP => ['default' => 'text/html'],
                self::CSS                        => ['default' => 'text/css'],
                self::CSV                        => ['default' => 'application/csv'],
                self::JS                         => ['default' => 'application/javascript'],
                self::JSON                       => ['default' => 'application/json'],
                self::SWF                        => ['default' => 'application/x-shockwave-flash'],
                self::XML                        => ['default' => ['application/xml', 'text/xml']],
                self::FLV                        => ['default' => 'video/x-flv'],
                self::PNG                        => ['default' => 'image/png'],
                self::JPE, self::JPG, self::JPEG => ['default' => 'image/jpeg'],
                self::GIF                        => ['default' => 'image/gif'],
                self::BMP                        => ['default' => 'image/bmp'],
                self::ICO                        => ['default' => 'image/vnd.microsoft.icon'],
                self::TIF, self::TIFF            => ['default' => 'image/tiff'],
                self::SVGZ, self::SVG            => ['default' => 'image/svg+xml'],
                self::PS, self::EPS, self::AI    => ['default' => 'application/postscript'],
                self::CAB                        => ['default' => 'application/vnd.ms-cab-compressed'],
                self::DOC                        => ['default' => 'application/msword'],
                self::MSI, self::EXE             => ['default' => 'application/x-msdownload'],
                self::QT, self::MOV              => ['default' => 'video/quicktime'],
                self::MP3                        => ['default' => 'audio/mpeg'],
                self::ODS                        => ['default' => 'application/vnd.oasis.opendocument.spreadsheet'],
                self::ODT                        => ['default' => 'application/vnd.oasis.opendocument.text'],
                self::PDF                        => ['default' => 'application/pdf'],
                self::PPT                        => ['default' => 'application/vnd.ms-powerpoint'],
                self::PSD                        => ['default' => 'image/vnd.adobe.photoshop'],
                self::RAR                        => ['default' => 'application/x-rar-compressed'],
                self::RTF                        => ['default' => 'application/rtf'],
                self::WAR                        => ['finfo'       => 'application/zip',
                                                     'http_header' => 'application/octet-stream',],
                self::XLS                        => ['default' => 'application/vnd.ms-excel'],
                self::XLSX                       => ['default' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
                self::ZIP                        => ['default' => 'application/zip'],
                self::YAML, self::YML            => ['finfo'        => 'text/plain',
                                                     'content_type' => 'application/x-yaml',
                                                     'http_header'  => ['application/octet-stream', 'application/x-yaml']],
                self::DOCX, self::PPTX           => ['default' => 'undefined in file type enum'],
                self::CRT                        => ['finfo'       => 'text/plain',
                                                     'http_header' => 'application/x-x509-ca-cert'],
                self::P7B                        => ['finfo'       => 'text/plain',
                                                     'http_header' => ['application/octet-stream', 'application/x-pkcs7-certificates']],
                self::KEY                        => ['finfo'       => 'text/plain',
                                                     'http_header' => ['application/octet-stream', 'application/pkcs8']],
                self::ENC                        => ['finfo'       => 'text/plain',
                                                     'http_header' => 'application/octet-stream']
            };
            if (isset($mimeType['default'])) {
                $mimeTypes[$extension->value]['finfo']       = is_array($mimeType['default']) ? $mimeType['default'] : [$mimeType['default']];
                $mimeTypes[$extension->value]['http_header'] = is_array($mimeType['default']) ? $mimeType['default'] : [$mimeType['default']];
            }
            if (isset($mimeType['finfo'])) {
                $mimeTypes[$extension->value]['finfo'] = is_array($mimeType['finfo']) ? $mimeType['finfo'] : [$mimeType['finfo']];
            }
            if (isset($mimeType['http_header'])) {
                $mimeTypes[$extension->value]['http_header'] = is_array($mimeType['http_header']) ? $mimeType['http_header'] : [$mimeType['http_header']];
            }
            if (isset($mimeType['content_type'])) {
                $mimeTypes[$extension->value]['content_type'] = $mimeType['content_type'];
            }
        }
        return $mimeTypes;
    }

    /**
     * @param string $fileType
     * @return string
     */
    public static function getContentType(string $fileType): string
    {
        $types = self::getFileTypes();
        if (isset($types[$fileType]['content_type'])) {
            return $types[$fileType]['content_type'];
        } elseif (isset($types[$fileType]['http_header']) && is_array($types[$fileType]['http_header']) && count($types[$fileType]['http_header']) === 1) {
            return $types[$fileType]['http_header'][0];
        }
        return 'application/octet-stream';
    }
}

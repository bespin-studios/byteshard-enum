<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum\Export;

/**
 * Class ExportType
 * @package byteShard\Enum\Export
 */
enum ExportType: string
{
    case XLS = 'xls';
    case PDF = 'pdf';
    case CSV = 'csv';
    case CUSTOM_XLS = 'custom_XLS';
    case CUSTOM_PPT = 'custom_PPT';
    case CUSTOM = 'custom';
    case DOWNLOAD = 'download';
}

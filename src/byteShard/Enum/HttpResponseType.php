<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

/**
 * Class HttpResponseType
 * @package byteShard\Enum
 */
enum HttpResponseType: string
{
    case JSON = 'json';
    case TXT  = 'txt';
    case XML  = 'xml';
}

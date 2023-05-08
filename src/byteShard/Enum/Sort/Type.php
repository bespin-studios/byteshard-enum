<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum\Sort;

/**
 * Class Type
 * @package byteShard\Enum\Sort
 */
enum Type: int
{
    case LOCALE_STRING = 5;
    case NATURAL       = 6;
    case NUMERIC       = 1;
    case REGULAR       = 0;
    case STRING        = 2;
}

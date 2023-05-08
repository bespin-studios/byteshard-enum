<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

enum Access: int
{
    case NONE = 0;
    case READ = 1;
    case WRITE = 2;
    case EXECUTE = 4;
    case ALL = 7;
}

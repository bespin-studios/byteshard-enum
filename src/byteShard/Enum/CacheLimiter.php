<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

enum CacheLimiter: string
{
    case NOCACHE = 'nocache';
    case PRIVATE = 'private';
    case PRIVATE_NO_EXPIRE = 'private_no_expire';
    case PUBLIC = 'public';
}

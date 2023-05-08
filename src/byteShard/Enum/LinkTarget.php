<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

enum LinkTarget: string
{
    case BLANK = '_blank';
    case PARENT = '_parent';
    case TOP = '_top';
    case SELF = '_self';
}
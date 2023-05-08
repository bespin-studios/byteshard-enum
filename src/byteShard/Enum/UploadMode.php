<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

enum UploadMode: string
{
    case html5 = 'html5';
    case flash = 'flash';
    case html4 = 'html4';
}

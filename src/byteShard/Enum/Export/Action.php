<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum\Export;

enum Action: string
{
    case GET_STATE = 'getState';
    case GET_FILE  = 'getFile';
}

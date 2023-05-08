<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum\DB;
use byteShard\Enum;

/**
 * Class CursorType
 * @package byteShard\Enum\DB
 */
final class CursorType extends Enum\Enum
{
    const FORWARD_CURSOR = 1; //less memory, only forward movement
    const DYNAMIC_CURSOR = 2; //more memory used, backward movement
}
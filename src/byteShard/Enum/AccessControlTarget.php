<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

/**
 * Class AccessControlTarget
 * @package byteShard\Enum
 */
enum AccessControlTarget: string
{
    case ACCESS_CONTROL_DEFINED_ON_DB = 'dbdef'; // whether a user is permitted to log in to the application will be evaluated against a DB defined option
    case ACCESS_CONTROLLED_BY_DB = 'db';    // if a user is permitted to log in to the application is stored on the DB
    case ACCESS_CONTROLLED_BY_LDAP = 'ldap';  // if a user is permitted to log in to the application is defined in the ldap and can include access for only certain ldap groups
}

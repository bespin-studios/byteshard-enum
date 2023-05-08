<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

/**
 * Class Validation
 * @package byteShard\Enum\Form
 */
final class Validation extends Enum
{
    const IS_EMPTY            = 'Empty';
    const NOT_EMPTY           = 'NotEmpty';
    const VALID_BOOLEAN       = 'ValidBoolean';
    const VALID_EMAIL         = 'ValidEmail';
    const VALID_INTEGER       = 'ValidInteger';
    const VALID_NUMERIC       = 'ValidNumeric';
    const VALID_ALPHA_NUMERIC = 'ValidText';
    const VALID_DATETIME      = 'ValidDatetime';
    const VALID_DATE          = 'ValidDate';
    const VALID_IP_V4         = 'ValidIPv4';
    const VALID_CURRENCY      = 'ValidCurrency';
    const VALID_SSN           = 'ValidSSN';
    const VALID_SIN           = 'ValidSIN';
    const VALID_TEXT          = 'ValidText';
    const MIN_LENGTH          = 'minLength';
    const MAX_LENGTH          = 'maxLength';
    const ENUM                = 'enum';
}

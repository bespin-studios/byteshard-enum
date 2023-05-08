<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

enum LogLevel: int
{
    /**
     * System is unusable.
     */
    case EMERGENCY = 1;

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     */
    case ALERT = 2;

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     */
    case CRITICAL = 3;

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     */
    case ERROR = 4;

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     */
    case WARNING = 5;

    /**
     * Normal but significant events.
     */
    case NOTICE = 6;

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     */
    case INFO = 7;

    /**
     * Logs with an arbitrary level.
     */
    case DEBUG = 8;

    /**
     * @param LogLevel $logLevel
     * @return int
     */
    public static function getMonologLevel(LogLevel $logLevel): int
    {
        return match ($logLevel) {
            self::EMERGENCY => 600,
            self::ALERT     => 550,
            self::CRITICAL  => 500,
            self::WARNING   => 300,
            self::NOTICE    => 250,
            self::INFO      => 200,
            self::DEBUG     => 100,
            default         => 400,
        };
    }
}

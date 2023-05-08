<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum;

use ReflectionClass;
use ReflectionException;

/**
 * Class Enum
 */
abstract class Enum
{
    private mixed        $value;
    private static array $const_cache_array = [];

    /**
     * Enum constructor.
     * will only be called by either __callStatic or in case the enum child class implements the methods directly
     */
    protected function __construct(mixed $value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->value;
    }

    /**
     * @param string $enum
     * @param mixed $args
     * @return Enum|null
     */
    public static function __callStatic(string $enum, mixed $args): ?Enum
    {
        if (defined(get_called_class().'::'.$enum)) {
            $enumClass = get_called_class();
            if ($enumClass !== Enum::class) {
                return new $enumClass(constant($enumClass.'::'.$enum));
            }
        }
        return null;
    }

    /**
     * @return array
     */
    private static function getConstants(): array
    {
        $called_class = get_called_class();
        if (!isset(self::$const_cache_array[$called_class])) {
            try {
                $reflect                                = new ReflectionClass($called_class);
                self::$const_cache_array[$called_class] = $reflect->getConstants();
            } catch (ReflectionException $e) {
                // there will never be an exception.
                // The constructor can only fail if the class does not exist
                // Since the class is returned by get_called_class it always exists
                // just in case: we set an array
                self::$const_cache_array[$called_class] = [];
            }
        }
        return self::$const_cache_array[$called_class];
    }

    public static function is_enum(string|int $nameOrValue): bool
    {
        $constants = self::getConstants();
        if (isset($constants[$nameOrValue]) === true || in_array($nameOrValue, $constants, true) === true) {
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public static function get_enums(): array
    {
        return self::getConstants();
    }
}

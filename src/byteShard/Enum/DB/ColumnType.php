<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum\DB;

use byteShard\Enum;

/**
 * Class ColumnType
 * @package byteShard\Enum\DB
 */
final class ColumnType extends Enum\Enum
{
    const INT = 'int';
    const INTEGER = 'integer';
    const BIGINT = 'bigint';
    const TINYINT = 'tinyint';
    const SMALLINT = 'smallint';
    const MEDIUMINT = 'mediumint';
    const UNSIGNED_BIGINT = 'ubigint';
    const UNSIGNED_INT = 'uint';
    const UNSIGNED_INTEGER = 'uint';
    const UNSIGNED_TINYINT = 'utinyint';
    const UNSIGNED_SMALLINT = 'usmallint';
    const UNSIGNED_MEDIUMINT = 'umediumint';

    const BSID_INT = 'BSIDInt';
    const BSID_INT_MATCH = 'BSIDIntMatch';
    const BSID_VARCHAR = 'BSIDVarchar';
    const BSID_VARCHAR_MATCH = 'BSIDVarcharMatch';

    const DECIMAL = 'decimal';
    const REAL = 'real';
    const DOUBLE = 'double';
    const FLOAT = 'float';

    const BIT = 'bool';
    const BOOL = 'bool';
    const BOOLEAN = 'bool';

    const CHAR = 'char';
    const VARCHAR = 'varchar';
    const CHARACTER_VARYING = 'character varying';
    const NCHAR = 'nchar';
    const NVARCHAR = 'nvarchar';
    const TEXT = 'text';
    const TINYTEXT = 'tinytext';
    const MEDIUMTEXT = 'mediumtext';
    const LONGTEXT = 'longtext';

    const BYTEA = 'bytea';
    const BLOB = 'blob';
    const TINYBLOB = 'tinyblob';
    const MEDIUMBLOB = 'mediumblob';
    const LONGBLOB = 'longblob';
    const BINARY = 'binary';
    const VARBINARY = 'varbinary';

    const ENUM = 'enum';
    const SET = 'set';

    const DATE = 'date';
    const SMALLDATETIME = 'smalldatetime';
    const DATETIME = 'datetime';
    const DATETIME2 = 'datetime2';
    const DATETIMEOFFSET = 'datetimeoffset';
    const BIGINT_DATE = 'bigintDate';
    const TIME = 'time';
    const TIMESTAMP = 'timestamp';
    const YEAR = 'year';

    const POINT = 'point';
    const MULTIPOINT = 'multipoint';
    const LINESTRING = 'linestring';
    const MULTILINESTRING = 'multilinestring';
    const POLYGON = 'polygon';
    const MULTIPOLYGON = 'multipolygon';
    const GEOMETRY = 'geometry';
    const GEOMETRYCOLLECTION = 'geometrycollection';
    const BOX = 'box';
    const CIRCLE = 'circle';
    const PATHS = 'paths';

    const MONEY = 'money';  //  stores a currency amount with a fixed fractional precision
    // Network address Types
    const CIDR = 'cidr';
    const INET = 'inet';
    const MACADDR = 'macaddr';
    // text search types
    const TSVECTOR = 'tsvector';
    const TSQUERY = 'tsquery';

    const UUID = 'uuid'; // uuid stores Universally Unique Identifiers

    public static function is_numeric(string $nameOrValue): bool
    {
        switch ($nameOrValue) {
            case self::INT:
            case self::INTEGER:
            case self::BIGINT:
            case self::TINYINT:
            case self::SMALLINT:
            case self::MEDIUMINT:
            case self::UNSIGNED_BIGINT:
            case self::UNSIGNED_INT:
            case self::UNSIGNED_INTEGER:
            case self::UNSIGNED_TINYINT:
            case self::UNSIGNED_SMALLINT:
            case self::UNSIGNED_MEDIUMINT:
            case self::REAL:
            case self::DOUBLE:
            case self::FLOAT:
            case self::BSID_INT:
            case self::BSID_INT_MATCH:
            case self::MONEY:
                return true;
            default:
                return false;
        }
    }

    public static function is_string(string $nameOrValue): bool
    {
        return !self::is_numeric($nameOrValue);
    }
}

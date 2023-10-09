<?php
/**
 * @copyright  Copyright (c) 2009 Bespin Studios GmbH
 * @license    See LICENSE file that is distributed with this source code
 */

namespace byteShard\Enum\DB;

/**
 * Class ColumnType
 * @package byteShard\Enum\DB
 */
enum ColumnType: string
{
    case INT = 'int';
    case INTEGER = 'integer';
    case BIGINT = 'bigint';
    case TINYINT = 'tinyint';
    case SMALLINT = 'smallint';
    case MEDIUMINT = 'mediumint';
    case UNSIGNED_BIGINT = 'ubigint';
    case UNSIGNED_INT = 'uint';
    case UNSIGNED_INTEGER = 'uinteger';
    case UNSIGNED_TINYINT = 'utinyint';
    case UNSIGNED_SMALLINT = 'usmallint';
    case UNSIGNED_MEDIUMINT = 'umediumint';

    case BSID_INT = 'BSIDInt';
    case BSID_INT_MATCH = 'BSIDIntMatch';
    case BSID_VARCHAR = 'BSIDVarchar';
    case BSID_VARCHAR_MATCH = 'BSIDVarcharMatch';

    case DECIMAL = 'decimal';
    case REAL = 'real';
    case DOUBLE = 'double';
    case FLOAT = 'float';

    case BIT = 'bit';
    case BOOL = 'bool';
    case BOOLEAN = 'boolean';

    case CHAR = 'char';
    case VARCHAR = 'varchar';
    case CHARACTER_VARYING = 'character varying';
    case NCHAR = 'nchar';
    case NVARCHAR = 'nvarchar';
    case TEXT = 'text';
    case TINYTEXT = 'tinytext';
    case MEDIUMTEXT = 'mediumtext';
    case LONGTEXT = 'longtext';

    case BYTEA = 'bytea';
    case BLOB = 'blob';
    case TINYBLOB = 'tinyblob';
    case MEDIUMBLOB = 'mediumblob';
    case LONGBLOB = 'longblob';
    case BINARY = 'binary';
    case VARBINARY = 'varbinary';

    case ENUM = 'enum';
    case SET = 'set';

    case DATE = 'date';
    case SMALLDATETIME = 'smalldatetime';
    case DATETIME = 'datetime';
    case DATETIME2 = 'datetime2';
    case DATETIMEOFFSET = 'datetimeoffset';
    case BIGINT_DATE = 'bigintDate';
    case TIME = 'time';
    case TIMESTAMP = 'timestamp';
    case YEAR = 'year';

    case POINT = 'point';
    case MULTIPOINT = 'multipoint';
    case LINESTRING = 'linestring';
    case MULTILINESTRING = 'multilinestring';
    case POLYGON = 'polygon';
    case MULTIPOLYGON = 'multipolygon';
    case GEOMETRY = 'geometry';
    case GEOMETRYCOLLECTION = 'geometrycollection';
    case BOX = 'box';
    case CIRCLE = 'circle';
    case PATHS = 'paths';

    case MONEY = 'money';  //  stores a currency amount with a fixed fractional precision
    // Network address Types
    case CIDR = 'cidr';
    case INET = 'inet';
    case MACADDR = 'macaddr';
    // text search types
    case TSVECTOR = 'tsvector';
    case TSQUERY = 'tsquery';

    case UUID = 'uuid'; // uuid stores Universally Unique Identifiers

    public static function is_numeric(ColumnType $columnType): bool
    {
        return match ($columnType) {
            self::INT,
            self::INTEGER,
            self::BIGINT,
            self::TINYINT,
            self::SMALLINT,
            self::MEDIUMINT,
            self::UNSIGNED_BIGINT,
            self::UNSIGNED_INT,
            self::UNSIGNED_INTEGER,
            self::UNSIGNED_TINYINT,
            self::UNSIGNED_SMALLINT,
            self::UNSIGNED_MEDIUMINT,
            self::REAL,
            self::DOUBLE,
            self::FLOAT,
            self::BSID_INT,
            self::BSID_INT_MATCH,
            self::MONEY => true,
            default     => false,
        };
    }

    public static function is_string(ColumnType $nameOrValue): bool
    {
        return !self::is_numeric($nameOrValue);
    }

    public function value(): string
    {
        return match ($this) {
            self::BIT, self::BOOLEAN => 'bool',
            self::UNSIGNED_INTEGER   => 'uint',
            default                  => $this->value
        };
    }
}

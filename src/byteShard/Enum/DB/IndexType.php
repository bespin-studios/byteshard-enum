<?php

namespace byteShard\Enum\DB;

enum IndexType: string
{
    case BTREE = 'btree';       // default, general purpose — works everywhere
    case FULLTEXT = 'fulltext'; // text search
}
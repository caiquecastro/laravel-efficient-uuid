<?php

namespace Dyrynda\Database\Schema\Grammars;

use Illuminate\Support\Fluent;
use Illuminate\Database\Schema\Grammars\SQLiteGrammar as IlluminateSQLiteGrammar;

class SQLiteGrammar extends IlluminateSQLiteGrammar
{
    /**
     * Create the column definition for a UUID type.
     *
     * @return string
     */
    protected function typeEfficientUuid()
    {
        return 'blob(256)';
    }
}

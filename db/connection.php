<?php

class SQLiteDB extends SQLite3
{
    function __construct()
    {
        $this->open(__DIR__.'/../data/database.db');
    }
}
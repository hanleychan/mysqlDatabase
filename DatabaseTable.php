<?php

class DatabaseTable extends DatabaseObject
{
    public $id;

    protected static $tableName = 'databasetablename';
    protected static $dbFields = array('id');
}

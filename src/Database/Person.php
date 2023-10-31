<?php

namespace AndreusTimm\PHPUnit\Database;

class Person extends \Phormium\Model
{
    protected static $_meta = array(
        'database' => 'phpunit_test',
        'table' => 'persons',
        'pk' => 'id'
    );

    public $id;
    public $name;
    public $email;
}
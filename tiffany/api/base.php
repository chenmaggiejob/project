<?php
class DB
{
    public $table;
    public $dsn = "mysql:host=localhost;charset=utf8;dbname=mytiffany;";
    public $pdo;
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

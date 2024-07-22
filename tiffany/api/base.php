<?php
session_start();
class DB
{
    public $table;
    public $dsn = "mysql:host=localhost;charset=utf8;dbname=mytiffany;";
    public $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    public function count(...$arg)
    {
        $sql = "select count(*) from  `$this->table`";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }
        if (isset($arg[1])) {
            $sql .= $arg[0];
        }
        return $this->pdo->query($sql)->fetchColumn();
    }

    protected function a2s($array)
    {
        $tmp = [];
        foreach ($array as $key => $value) {
            $tmp[] = "`$key` = '$value'";
        }
        return $tmp;
    }
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function  to($url)
{
    header("location:" . $url);
}

$Admin = new DB('admin');
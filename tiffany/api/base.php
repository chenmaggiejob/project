<?php
session_start();
$_SESSION['status'] = 0;
class DB
{
    public $table;
    public $dsn = "mysql:host=localhost;charset=utf8;dbname=mytiffany;";
    // public $dsn = "mysql:host=localhost;charset=utf8;dbname=s1130110;";
    public $pdo;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
        // $this->pdo = new PDO($this->dsn, 's1130110', 's1130110');
    }

    public function all(...$arg)
    {
        $sql = "select * from  `$this->table`";

        if (isset($arg[0])) {
            if (is_array($arg[0])) {
                $tmp = $this->a2s($arg[0]);
                $sql .= " where " . join(" && ", $tmp);
            } else {
                $sql .= $arg[0];
            }
        }

        if (isset($arg[1])) {
            $sql .= $arg[1];
        }
        //echo $sql;

        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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

    public function find($arg)
    {
        $sql = "select * from `$this->table` ";
        if (is_array($arg)) {
            $tmp = $this->a2s($arg);
            $sql .= " where " . join(" && ", $tmp);
        } else {
            $sql .= " where `id`='$arg'";
        }
        //echo $sql;

        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    public function save($arg)
    {
        if (isset($arg['id'])) {
            //update
            $tmp = $this->a2s($arg);
            $sql = "update `$this->table` set " . join(",", $tmp);
            $sql .= " where `id`='{$arg['id']}'";
        } else {
            //insert
            $keys = array_keys($arg);
            $sql = "insert into `$this->table` (`" . join("`,`", $keys) . "`) 
                   values('" . join("','", $arg) . "')";
        }
        return $this->pdo->exec($sql);
    }

    function del($data)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = '{$data['id']}'";
        return $this->pdo->exec($sql);
    }


    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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

$Admin = new DB('tf_admin');

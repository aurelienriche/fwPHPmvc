<?php

class Database
{

    private $pdo;

    public function __construct($login, $password, $database_name, $host = 'localhost')
    {
        try {
            $this->pdo = new PDO("mysql:dbname=$database_name;host=$host", $login, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo "<pre><code class='error'>";
            echo 'An error occurred while trying to connect to the database. Check the file : "/application/controller/class/App.php". Error code : ' . '<b>' . $e->getMessage() . '</b>';
            echo "</pre></code>";
            ini_set("log_errors", 1);
            ini_set("error_log", APP . 'logs/error.log');
            error_log("Database exception: " . $e->getMessage());
            die();
        }
    }

    /**
     * @param $query
     * @param bool|array $params
     * @return PDOStatement
     */
    public function query($query, $params = false)
    {
        if ($params) {
            $req = $this->pdo->prepare($query);
            $req->execute($params);
        } else {
            $req = $this->pdo->query($query);
        }
        return $req;
    }

    /**
     * @return string
     */
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }

    /**
     * @return mixed
     */
    public function errorCode()
    {
        return $this->pdo->errorCode();
    }

}

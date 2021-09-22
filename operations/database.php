<?php

/**************************************
Calls for DataBase creation
 https://www.w3schools.com/php/php_mysql_intro.asp
**************************************/
class DataBase
{
    public $servername;
    public $dbname;
    public $username;
    public $password;

    public function __construct($servername = null, $dbname = null, $username = null, $password = null)
    {
        $this->servername = $servername ?? $_ENV['DATABASE_SERVERNAME'];
        $this->username = $username ?? $_ENV['DATABASE_USER'];
        $this->dbname = $dbname ?? $_ENV['DATABASE_NAME'];
        $this->password = $password ?? $_ENV['DATABASE_PASSWORD'];
    }

    public function connectTo()
    {
        try {
            $conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->dbname",
                $this->username,
                $this->password
            );
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully to " . $this->dbname . "...\n <br>";
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}


/* **********************************************************
Some examples of PHP SQL  Database commands.
********************************************************* */
//
// $results  = $DB->query("SELECT * FROM students");
// $results = $results->fetchAll(PDO::FETCH_ASSOC);
//
// $inv = $db->query('SELECT * FROM students ORDER BY invoice DESC LIMIT 1');
// $inv = $inv->fetch();
//
// $account = $db->prepare("SELECT * FROM accounts WHERE account = :acc");
// $account->bindParam(':acc', $acc);
// $account->execute();
// $account = $account->fetchAll(PDO::FETCH_ASSOC);
//
// $db->exec("INSERT INTO invoices VALUES(null, '$account', '$company_name', '$invoice_date')");

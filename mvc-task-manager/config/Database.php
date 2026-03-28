<?php

class Database {
    private $host = "localhost";
    private $dbname = "mvc_task_manager";
    private $username = "root";
    private $password = "";

    public function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Greška pri konekciji: " . $conn->connect_error);
        }

        return $conn;
    }
}
?><?php


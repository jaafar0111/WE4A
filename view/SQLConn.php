<?php 
    class SQLConn{

        private $servername = "";
        private $username = "";
        private $password = "";
        private $dbname = "";
        private $loginSuccessfull = false;
        private $error = "";
        private $conn = null ;

        function __construct($password=null, $servername=null, $username=null, $dbname=null) {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }

        function copy(SQLConn &$sQLConn){
            $this->servername = $sQLConn->servername;
            $this->username = $sQLConn->username;
            $this->password = $sQLConn->password;
            $this->dbname = $sQLConn->dbname;
            $this->conn = $sQLConn->conn;
        }

        function connect() {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            if($this->conn->connect_error){     
                $this->error = $this->conn->connect_error; 
                echo $this->error;  
            }
            else {
                $this->loginSuccessfull = true;
            }

        }
        function getLoginSuccessfull(){
            return $this->loginSuccessfull;
        }

        function getUsername() {
            return $this->username;
        }

        function getPassword() {
            return $this->password;
        }

        function getConn(){
            return $this->conn;
        }
        function getDbname() {
            return $this->dbname;
        }

        function getServerName() {
            return $this->servername;
        }

        function __toString() {
            return "mysql:host:" . $this->getServerName() . ";dbname=" . $this->getDbname();
        }

        function query($SQL_query){
            $this->conn->query($SQL_query);
        }
        function securizeString_ForSQL($string) {
            $string = trim($string);
            $string = stripcslashes($string);
            $string = addslashes($string);
            $string = htmlspecialchars($string);
            return $string;
        }
    }
?>
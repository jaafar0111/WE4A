<?php

require_once(__ROOT__ . "/config/config.php");

class ConnexionDB
{
    //Instance de la classe PDO
    private $PDOInstance = null;

    //Instance ConnexionDB
    private static $instance = null;

    //DB user
    const DEFAULT_SQL_USER = __DBUSER__;

    //DB host
    const DEFAULT_SQL_HOST = __DBHOST__;

    //DB user password
    const DEFAULT_SQL_PASS = __DBPASS__;

    //DB name
    const DEFAULT_SQL_DTB = __DBNAME__;

    //Constructor
    private function __construct()
    {
        try {
            $this->PDOInstance = new PDO('mysql:host=' . self::DEFAULT_SQL_HOST . ';dbname=' . self::DEFAULT_SQL_DTB, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASS);
            $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    //Création de l'objet unique ConnexionDB
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new ConnexionDB();
        }
        return self::$instance;
    }

    /**
     * Exécute une requête SQL avec PDO
     *
     * @param string $query La requête SQL
     * @return PDOStatement Retourne l'objet PDOStatement
     */
    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }
}

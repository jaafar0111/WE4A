<?php
class login
{
    private $PDOInstance = null;
    private static $instance = null;

    const DEFAULT_SQL_USER = 'root';
    const DEFAULT_SQL_HOST = 'localhost';
    const DEFAULT_SQL_PASS = '';
    const DEFAULT_SQL_DTB = 'netatlas';

    private function __construct()
    {
        try {
            $this->PDOInstance = new PDO('mysql:host=' . self::DEFAULT_SQL_HOST . ';dbname=' . self::DEFAULT_SQL_DTB, self::DEFAULT_SQL_USER, self::DEFAULT_SQL_PASS);
            $this->PDOInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur de connexion à la BD : " . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new login();
        }
        return self::$instance;
    }

    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function login($username, $password)
{
    try {
        $stmt = $this->PDOInstance->prepare("SELECT * FROM user WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        //pour vérifier le matche du mot de passe
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            return true;
        } else {
            return false;
        }
    } catch (PDOException $e) {
        echo "Erreur SQL : " . $e->getMessage(); // Afficher l'erreur SQL
        return false;
    }
}

}
?>

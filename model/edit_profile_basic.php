<?php
class edit_profile_basic
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
            self::$instance = new edit_profile_basic();
        }
        return self::$instance;
    }

    public function query($query)
    {
        return $this->PDOInstance->query($query);
    }

    public function insertFormData($Firstname, $Lastname, $email, $phone, $selfIntro)
    {

        try {
            $stmt = $this->PDOInstance->prepare("INSERT INTO user (Firstname, Lastname, email, phone, selfIntro) VALUES (:Firstname, :Lastname, :email, :phone, :selfIntro)");
            $stmt->bindParam(':Firstname', $Firstname);
            $stmt->bindParam(':Lastname', $Lastname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':selfIntro', $selfIntro);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erreur d'insertion : " . $e->getMessage();
            return false;
        }
    }
}
?>

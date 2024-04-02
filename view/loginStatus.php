<?php

class LoginStatus{

    public $loginSuccessful = false;
    public $loginAttempted = false;
    public $errorText = "";
    public $userID = 0;
    public $userName = "";

    // Constructeur de la classe
    //-------------------------------------------------------------------------------------------------------
    function __construct(&$SQLconn) {
        
        $this->loginSuccessful = false;

        //Données reçues via formulaire?
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $this->userName = $SQLconn->securizeString_ForSQL($_POST["username"]);
            $password = md5($_POST["password"]);
            $this->loginAttempted = true;
        }
        //Données via le cookie?
        elseif ( isset( $_COOKIE["username"] ) && isset( $_COOKIE["password"] ) ) {
            $this->userName = $_COOKIE["username"];
            $password = $_COOKIE["password"];
            $this->loginAttempted = true;
        }
        else {
            $this->loginAttempted = false;
        }

        //Si un login a été tenté, on interroge la BDD
        if ( $this->loginAttempted){
            $query = "SELECT * FROM user WHERE username = '".$this->userName."' AND password ='".$password."'";
            $result = $SQLconn->getConn()->query($query);

            if ( $result->num_rows != 0 ){
                $row = $result->fetch_assoc();
                $this->userID = $row["user_id"];
                $this->userName = $row["username"];
                $this->CreateLoginCookie($this->userName, $password);
                $this->loginSuccessful = true;
            }
            else {
                $this->errorText = "Ce couple login/mot de passe n'existe pas. Créez un Compte";
            }
        }
    }// fin de Méthode

    // Méthode pour stocker un login réussi dans un cookie
    //-------------------------------------------------------------------------------------------------------
    function CreateLoginCookie($username, $encryptedPasswd){

        setcookie("username", $username, time() + 24*3600 );
        setcookie("password", $encryptedPasswd, time() + 24*3600);

    }// fin de Méthode

    // Méthode pour se délogger. Détruit le cookie.
    //-------------------------------------------------------------------------------------------------------
    function Logout(){

        setcookie("username", NULL, -1 );
        setcookie("password", NULL, -1);

    }// fin de Méthode

} // Fin de classe

?>
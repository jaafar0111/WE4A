<?php
//ecrit dans __ROOT__ le chemin "disque dur" du fichier de la page
define('__ROOT__', dirname(__FILE__));

require_once(__ROOT__ . "/classes/connexion_db.php");
$dbInstance =  ConnexionDB::getInstance();
?>

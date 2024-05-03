<?php
// j'ai creer ce login pour avoir une session 
require_once 'C:\xampp\htdocs\WE4A\model\login.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = login::getInstance();
    $success = $conn->login($username, $password);

    if (isset($_SESSION['username'])) {
        header('Location: http://localhost/WE4A/view/espace_user.php');
        exit();
    } else {
        echo "erreur de connexion";
    }
}

?>
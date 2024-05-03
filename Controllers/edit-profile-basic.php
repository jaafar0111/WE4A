<?php
require_once 'C:\xampp\htdocs\WE4A\model\edit_profile_basic.php';

class EditProfileController {

    public function __construct() {
        session_start();
    }

    public function soumettreFormulaire() {
        
        if (!isset($_SESSION['username'])) {
            header('Location: login.php');
            exit();
        }


        $Firstname = $_POST['Firstname'];
        $Lastname = $_POST['Lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $selfIntro = $_POST['selfIntro'];


        $editProfile = edit_profile_basic::getInstance();


        $success = $editProfile->insertFormData($Firstname, $Lastname, $email , $phone, $selfIntro);

        if ($success) {
            header('Location: http://localhost/WE4A/view/espace_user.php');
            exit();
        } else {
            echo "Une erreur s'est produite lors de l'insertion des données.";
        }
    }
}

?>

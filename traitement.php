<?php
require_once 'ConnectionDB.php';
$syb = $_POST['submit'];
// Récupérer les données du formulaire
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
// Récupérer la date de naissance
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$date_naissance = $annee . '-' . $mois . '-' . $jour;
// Récupérer le genre
$genre = $_POST['genre'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$description = $_POST['description'];

// Créer une instance de la classe ConnectionDB
$conn = ConnectionDB::getInstance('localhost', 'root', '', 'netatlas');

// Insérer les données dans la base de données
$query = "INSERT INTO user (prenom, nom, email, telephone, date_naissance, genre, ville, pays, description) VALUES (:prenom, :nom, :email, :telephone, :date_naissance, :genre, :ville, :pays, :description)";
$stmt = $conn->query($query);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telephone', $telephone);
$stmt->bindParam(':date_naissance', $date_naissance);
$stmt->bindParam(':genre', $genre);
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':pays', $pays);
$stmt->bindParam(':description', $description);
$stmt->execute();

// Redirection vers une page de confirmation ou autre
header('Location: http://localhost/WE4A/view/edit-profile-basic.php');
exit();
?>

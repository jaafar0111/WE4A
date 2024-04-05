<?php
$pageTitle = "NetAtlas - Accueil";
ob_start();
?>
<section>
    <h2>Home Page</h2>
    <p>Welcome to our home page.</p>
</section>
<?php
$pageContent = ob_get_clean();
require_once './templates/layout.php';
//include("./config/config.php");
//require_once(__ROOT__ . "/view/templates/layout.php"); // Include the template page
?>
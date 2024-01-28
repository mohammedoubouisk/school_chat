<?php
// demarer la session
session_start();
if(!isset($_SESSION['user'])){
    // si l'utilisateur n'est pas connecter
    // redirection vers la page de connnexion
    header("location:login.php");
}
// destruction de toute les sessions
session_destroy();
// redirection vers la page de connexion
header("location:login.php");
?>
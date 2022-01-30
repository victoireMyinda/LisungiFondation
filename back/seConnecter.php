
<?php
session_start();

require_once('../db/connexiondb.php');

$login = isset($_POST['login']) ? $_POST['login'] : "";
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : "";

$requeteU = "select * from users where username='$login' and pwd='$pwd' ";
$resultatU = $pdo->query($requeteU);

if ($user = $resultatU->fetch()) {
    if ($user['etat'] == 1) {
        $_SESSION['user'] = $user;
        header('location:../view/index.php');
    } else {
        $_SESSION['Erreurlogin'] = " <strong> Erreur !! </strong> Votre compte est désactivé. <br> Veuiller contacter l'Admin";
        header('location:../view/login.php');
    }
} else {
    $_SESSION['Erreurlogin'] = " <strong> Erreur !! </strong> Nom d'utilisateur ou mot de passe incorrect.";
    header('location:../view/login.php');
}

?>
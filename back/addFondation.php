<?php
session_start();

include('../db/connexiondb.php');

if (isset($_POST['ajouter'])) {

    $nomF = $_POST['nomF'];
    $abbrev = $_POST['abbrev'];
    $adresse = $_POST['adresse'];
    $description = $_POST['description'];

    $logo = isset($_FILES['logo']['name']) ? $_FILES['logo']['name'] : "";
    $Img_temp = $_FILES['logo']['tmp_name'];
    move_uploaded_file($Img_temp, "../img/" . $logo);

    $req = "INSERT INTO  fondations(nomF, abbrev, logo, adresse, description) VALUES(?,?,?,?,?)";
    $param = array($nomF, $abbrev, $logo, $adresse, $description,);

    $res = $pdo->prepare($req);
    $res->execute($param);

    header("Location:../view/fondation.php");
}

<?php
include('../db/connexiondb.php');

if (isset($_POST['editer'])) {

    $id= $_POST['id_f'];

    $nomF = $_POST['nomF'];
    $abbrev = $_POST['abbrev'];
    $adresse = $_POST['adresse'];
    $description = $_POST['description'];

    $logo = isset($_FILES['logo']['name']) ? $_FILES['logo']['name'] : "";
    $Img_temp = $_FILES['logo']['tmp_name'];
    move_uploaded_file($Img_temp, "../img/" . $logo);

    if (!empty($logo)) {
        $req = "UPDATE fondations set nomF=?, abbrev=?, logo=?, adresse=?, description=? WHERE id_f='$id'";
        $params = array($nomF, $abbrev, $logo, $adresse, $description);
        $resultat = $pdo->prepare($req);
        $resultat->execute($params);

    } else {
        $req = "UPDATE fondations set nomF=?, abbrev=?, adresse=?, description=? WHERE id_f='$id'";
        $params = array($nomF, $abbrev, $adresse, $description);
        $resultat = $pdo->prepare($req);
        $resultat->execute($params);

    }

    header("Location:../view/fondation.php");
}

<?php

include('../db/connexiondb.php');

if (isset($_POST['valider'])) {

    $id_f = $_POST['id_f'];
    $montant = $_POST['montant'];

    echo $id_f, $montant;

    $id_fournReque = "select * from fournisseurs where id_fourn in (select max(id_fourn) from fournisseurs)";
    $query = $pdo->query($id_fournReque);
    
    $res = $query->fetch();
    
    $id_fourn = $res['id_fourn'];

    $req = "UPDATE fournisseurs set montant=? WHERE id_fourn='$id_fourn '";
    $params = array($montant);
    $resultat = $pdo->prepare($req);
    $resultat->execute($params);

    $req = "INSERT INTO  donpivot(id_f, id_fourn) VALUES(?,?)";
    $param = array($id_f, $id_fourn);

    $res = $pdo->prepare($req);
    $res->execute($param);

    header("Location:../view/donEffectues.php");
    
}

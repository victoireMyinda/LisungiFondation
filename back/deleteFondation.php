<?php 

    include('../db/connexiondb.php');

    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $req = "DELETE FROM fondations WHERE id_f='$id'";
        $res = $pdo->query($req);
    
        header("Location:../view/fondation.php");
    }

<?php
//session_start();

include('../db/connexiondb.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $requete = "SELECT * FROM donPivot, fournisseurs, fondations WHERE(donPivot.id_f = fondations.id_f) AND
    donPivot.id_fourn = fournisseurs.id_fourn AND id_pivot='$id'";

    $query = $pdo->query($requete);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <title>Détails</title>
</head>

<body>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12" style="margin-top:76px">
                <?php include('../includes/menuUp.php') ?>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="padding:0">
                        <?php include('../includes/menuLeft.php') ?>
                    </div>
                    <div class="col-md-10 " style="margin-top:10px">
                        <div class="col-md-12">

                            <div class="panel panel-success" style="margin-top: 10px;">
                                <div class="panel-heading"> Recherche des fondations... </div>
                                <div class="panel-body">

                                    <form method="get" action="filiere.php" class="form-inline">
                                        <div class="form-group">
                                            <input type="search" name="nomFondation" placeholder="Taper le nom d'une fondation" class="form-control" value="">
                                        </div>

                                        <!-- Bouton de recherche -->
                                        <button type="submit" class="btn btn-success">
                                            <span class="glyphicon glyphicon-search"> </span> Rechercher...
                                        </button> &nbsp; &nbsp;

                                        <a href="nouvelleFondation.php" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-plus"> </span> Nouvelle fondation
                                        </a>
                                    </form>
                                </div>
                            </div>

                            <div class="panel panel-primary" style="margin-top: 10px;">
                                <div class="panel-heading"> Liste de fondations... </div>
                                <div class="panel-body">

                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($fondation = $query->fetch()) { ?>
                                                <tr style='text-align: center;'>

                                                    <td colSpan='2px'>
                                                        <h2><?php echo $fondation['nomF'] ?></h2>
                                                        <img src='../img/<?php echo $fondation['logo'] ?>' style='width:150px; height: 150px; border-radius:100%;' />

                                                    </td>
                                                </tr>

                                                <tr style='text-align: center;'>

                                                    <td>
                                                        <h3>
                                                            Informations du fournisseur
                                                        </h3>
                                                        Noms fournisseurs : <?php echo $fondation['noms'] ?> <br>
                                                        Téléphne : <?php echo $fondation['telephone'] ?><br>
                                                        Adresse : <?php echo $fondation['adresse'] ?> <br>
                                                        Mode de paiement : <?php echo $fondation['paiement'] ?> <br>
                                                        Montant : <?php echo $fondation['montant'] ?> FC

                                                    </td>

                                                    <td>
                                                        <h3>
                                                            Informations de la Fondation
                                                        </h3>
                                                        Noms fondation : <?php echo $fondation['nomF'] ?> <br>
                                                        Abbréviation : <?php echo $fondation['abbrev'] ?><br>
                                                        Description : <?php echo $fondation['description'] ?>

                                                    </td>

                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
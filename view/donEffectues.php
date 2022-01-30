<?php 
    include('../db/connexiondb.php');

    $requete = "SELECT * FROM donPivot, fournisseurs, fondations WHERE(donPivot.id_f = fondations.id_f) AND
            donPivot.id_fourn = fournisseurs.id_fourn";

    $query = $pdo->query($requete);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <title>Dons</title>
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
                                    </form>
                                </div>
                            </div>

                            <div class="panel panel-primary" style="margin-top: 10px;">
                                <div class="panel-heading"> Liste de dons... </div>
                                <div class="panel-body">

                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom et Abbréviation Fondation</th>
                                                <th>Logo</th>
                                                <th>Noms Fournisseurs</th>
                                                <th>Téléphone</th>
                                                <th>Montant et Mode de transfert</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($data = $query->fetch()) { ?>
                                                <tr>
                                                    <td><?php echo $data['id_pivot'] ?></td>
                                                    <td><?php echo $data['nomF'] . ' , ' .$data['abbrev'] ?></td>
                                                    <td><img src='../img/<?php echo $data['logo'] ?>' style='width:50px; height: 50px; border-radius:100%'></td>
                                                    <td><?php echo $data['noms'] ?></td>
                                                    <td><?php echo $data['telephone'] ?></td>
                                                    <td><?php echo $data['montant'] . ' FC '. ' , ' .$data['paiement'] ?></td>
                                                    <td>
                                                        <a class='btn btn-info' href="detailDon.php?id=<?php echo $data['id_pivot'] ?>">Détail</a>
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
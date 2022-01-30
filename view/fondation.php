<?php
include('../db/connexiondb.php');

$requete = "SELECT * FROM fondations";

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
    <title>Fondation</title>
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
                                            <input type="search" name="nomFondation"
                                                placeholder="Taper le nom d'une fondation" class="form-control"
                                                value="">
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
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Abbréviation</th>
                                                <th>Logo</th>
                                                <th>Adresse</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($fondation = $query->fetch()) { ?>
                                            <tr>
                                                <td><?php echo $fondation['id_f'] ?></td>
                                                <td><?php echo $fondation['nomF'] ?></td>
                                                <td><?php echo $fondation['abbrev'] ?></td>
                                                <td>
                                                    <img style='width: 50px; height: 50px; border-radius:100%'
                                                        src="../img/<?php echo $fondation['logo'] ?>">
                                                </td>
                                                <td><?php echo $fondation['adresse'] ?></td>
                                                <td><?php echo $fondation['description'] ?></td>
                                                <td style="width:310px">
                                                    <a href="editerFondation.php?id=<?php echo $fondation['id_f'] ?>"
                                                        class="btn btn-info">Editer</a>
                                                    <a onclick="return confirm('Etes-vous sûr de vouloir supprimer cette fondation ?')"
                                                        href="../back/deleteFondation.php?id=<?php echo $fondation['id_f'] ?>"
                                                        class="btn btn-danger">Supprimer</a>
                                                    <a href="faireDon.php?id=<?php echo $fondation['id_f'] ?>"
                                                        class="btn btn-primary">Faire un don</a>
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
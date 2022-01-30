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

<style>
.imageH {
    display: inline-block;
}
</style>

<body>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12" style="margin-top:76px">
                <?php include('../includes/menuVisiteurUp.php') ?>
            </div>
            <div class="col-md-12">

                <div class="panel panel-success" style="margin-top: 10px;">
                    <div class="panel-heading"> Recherche des fondations... </div>
                    <div class="panel-body">

                        <form method="get" action="filiere.php" class="form-inline">
                            <div class="form-group">
                                <input type="search" name="nomFondation" placeholder="Taper le nom d'une fondation"
                                    class="form-control" value="">
                            </div>

                            <!-- Bouton de recherche -->
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-search"> </span> Rechercher...
                            </button> &nbsp; &nbsp;
                        </form>
                    </div>
                </div>

                <div class="panel panel-primary" style="margin-top: 10px;">
                    <div class="panel-heading"> Liste de fondations... </div>
                    <div class="panel-body">

                        <table class="table table-bordered table-striped table-hover ">
                            <tbody>

                                <?php while ($fondation = $query->fetch()) { ?>
                                <tr style='text-align: center;' class="">

                                    <td>
                                        <h2><?php echo $fondation['nomF'] ?></h2>
                                        <img src='../img/<?php echo $fondation['logo'] ?>'
                                            style='width:150px; height: 150px; border-radius:100%;' />
                                        <a class='btn btn-success'
                                            href='faireDon.php?id=<?php echo $fondation['id_f'] ?>'>Faire un don</a>

                                        <a class='btn btn-primary'
                                            href='detailDon.php?id=<?php echo $fondation['id_f'] ?>'>
                                            <i class='fa fa-plus'> </i> Voir plus</a>

                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
</body>

</html>
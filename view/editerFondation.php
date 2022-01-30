<?php
include('../db/connexiondb.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $requete = "SELECT * FROM fondations WHERE id_f='$id'";
    $query = $pdo->query($requete);

    $result = $query->fetch();

    $id_f = $result['id_f'];
    $nomF = $result['nomF'];
    $abbrev = $result['abbrev'];
    $adresse = $result['adresse'];
    $description = $result['description'];
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
    <title>NouvelleFondation</title>
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

                            <div class="panel panel-primary" style="margin-top: 10px;">
                                <div class="panel-heading"> Edditer une fondation </div>
                                <div class="panel-body">
                                    <form method="post" action="../back/editFondation.php" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="hidden" class='form-control' value='<?php echo $id_f ?>' name="id_f">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nom</label>
                                                    <input type="text" class='form-control' value='<?php echo $nomF ?>' name="nomF">
                                                </div>
                                                <div class="form-group">
                                                    <label>Abbréviation</label>
                                                    <input type="text" class='form-control' value='<?php echo $abbrev ?>' name="abbrev">
                                                </div>
                                                <div class="form-group">
                                                    <label>Chosir un logo</label>
                                                    <input type="file" class='form-control' name="logo">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <textarea type="text" class='form-control' value='<?php echo $adresse ?>' placeholder="Entrer une adresse" name="adresse"><?php echo $adresse ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea type="text" class='form-control' placeholder="Entrer une description" name="description"><?php echo $description ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-danger" href="fondation.php">Annuler</a>
                                        <button class="btn btn-success" type="submit" name="editer">Editer <?php echo $nomF ?></button>
                                    </form>
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
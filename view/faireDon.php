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
    $logo = $result['logo'];
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
    <title>Faire don</title>
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

                        <div class="panel panel-primary" style="margin-top: 10px;">
                            <div class="panel-heading">Faire don </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4" style='padding-left:40px'>
                                        <div class="" style='margin: 0 auto; text-align: center;'>
                                            <span style="font-size: 20px;"><?php echo $nomF ?></span><br>
                                            <img src="../img/<?php echo $logo ?>"
                                                style='width: 150px; height: 150px; border-radius: 100%;' />
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" class='form-control' value='<?php echo $id_f ?>'
                                                name="id_f">
                                        </div>
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" disabled class='form-control' value='<?php echo $nomF ?>'
                                                name="nomF">
                                        </div>
                                        <div class="form-group">
                                            <label>Abbréviation</label>
                                            <input type="text" class='form-control' disabled
                                                value='<?php echo $abbrev ?>' name="abbrev">
                                        </div>

                                        <div class="form-group">
                                            <label>Adresse</label>
                                            <textarea type="text" disabled class='form-control'
                                                value='<?php echo $adresse ?>' placeholder="Entrer une adresse"
                                                name="adresse"><?php echo $adresse ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea type="text" disabled class='form-control'
                                                placeholder="Entrer une description"
                                                name="description"><?php echo $description ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style='padding-left: 0 !important'>

                                        <form method="post" action="faireDon.php?id=<?php echo $id ?>"
                                            enctype="multipart/form-data">

                                            <div style='margin-left:50px'>
                                                <div class="" style='margin: 0 auto; text-align: center;'>
                                                    <span style="font-size: 20px;">Informations du
                                                        fournisseur</span><br>
                                                    <i style="font-size: 100px;" class="fa fa-handshake-o"
                                                        aria-hidden="true"></i>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nom complet</label>
                                                    <input required type="text" class='form-control'
                                                        placeholder="Nom complet" name="noms">
                                                </div>
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input required type="number" class='form-control'
                                                        placeholder="Entrer un numéro de téléphone" name="telephone">
                                                </div>

                                                <div class="form-group">
                                                    <label>Adresse</label>
                                                    <textarea type="text" required class='form-control'
                                                        placeholder="Entrer une adresse" name="adresse"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Chosir le mode de paiement</label>
                                                    <select name='paiement' class='form-control'>
                                                        <option value='choisir'>--Choisir--</option>
                                                        <option value='M-PSA'>M-PSA</option>
                                                        <option value='AIRTEL'>AIRTEL Money</option>
                                                        <option value='ORANGE'>Orange Money</option>
                                                    </select>
                                                </div>

                                                <a style="margin-top:20px" class="btn btn-danger"
                                                    href="fondation.php">Annuler</a>
                                                <button style="margin-top:20px" class="btn btn-success" type="submit"
                                                    name="faireDon">Effectuer le don</button>
                                            </div>


                                        </form>

                                    </div>
                                    <div class="col-md-4">
                                        <?php
                                        if (isset($_POST['faireDon'])) {
                                            $id = $_GET['id'];

                                            $option = $_POST['paiement'];

                                            if ($option == 'M-PSA' || $option == 'AIRTEL' || $option == 'ORANGE') { ?>
                                        <h4>Renseigner ces Informations</h4>
                                        <h5>Mode chosi <?php echo $option ?></h5>
                                        <form action='../back/faireDon.php' method='post'>

                                            <div class='form-group'>
                                                <input type="hidden" class='form-control' value='<?php echo $id ?>'
                                                    name='id_f' />
                                            </div>
                                            <div class='form-group'>
                                                <label>Entrer le montant</label>
                                                <input type="text" class='form-control' placeholder="Montant"
                                                    name='montant' />
                                            </div>
                                            <div class='form-group'>
                                                <label>Entrer le mot de passe</label>
                                                <input type="password" class='form-control' placeholder="Mot de passe"
                                                    name='password' />
                                            </div>

                                            <button name='valider' class='btn btn-primary'
                                                name='valider'>Valider</button>

                                        </form>
                                        <?php }
                                        }
                                        ?>

                                        <?php
                                        if (isset($_POST['faireDon'])) {

                                            $noms = $_POST['noms'];
                                            $telephone = $_POST['telephone'];
                                            $adresse = $_POST['adresse'];
                                            $paiement = $_POST['paiement'];

                                            $montant = "5000";

                                            $req = "INSERT INTO  fournisseurs(noms, telephone, adresse, paiement, montant) VALUES(?,?,?,?,?)";
                                            $param = array($noms, $telephone, $adresse, $paiement, $montant);

                                            $res = $pdo->prepare($req);
                                            $res->execute($param);
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src='../js/file-js.js'></script>
</body>

</html>
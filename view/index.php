<?php

include('../db/connexiondb.php');

$reqR = "SELECT count(*) countF FROM fondations ";
$res = $pdo->query("$reqR");
$tabR = $res->fetch();
$nbreR = $tabR['countF'];

$reqP = "SELECT count(*) countP FROM donPivot ";
$result = $pdo->query("$reqP");
$tabF = $result->fetch();
$nbrF = $tabF['countP'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">

    <title>Dashboard</title>
</head>

<style>
    .roulageBloc {
        width: 100%;
        background: #fff;
        margin-right: 20px;
        height: 200px;
        text-align: center;
        box-shadow: 2px 2px 18px silver;
    }

    h4 {
        padding-top: 17px;
    }
</style>

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
                    <div class="col-md-10 container" style="margin-top:10px">
                        <h3>Dashboard <i class="fa fa-dashboard"></i></h3>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4 roulageBloc">
                                    <table class='table table-bordered'>
                                        <tbody>
                                            <tr>
                                                <h4>Fondations <i class="fa fa-globe fa-spin"></i></h4>
                                            </tr>
                                            <tr>
                                                <td style='font-size: 20px;'><?php echo $nbreR ?></td>
                                            </tr>
                                            <tr>
                                                <td> <a class="btn btn-primary" href="fondation.php" style=" margin-top:10px">Voir tout</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4 roulageBloc">
                                    <table class='table table-bordered'>
                                        <tbody>
                                            <tr>
                                                <h4>Dons effectués <i class="fa fa-users"></i></h4>
                                            </tr>
                                            <tr>
                                                <td style='font-size: 20px;'><?php echo $nbrF ?></td>
                                            </tr>
                                            <tr>
                                                <td> <a class="btn btn-primary" href="donEffectues.php" style=" margin-top:10px">Voir tout</a></td>
                                            </tr>
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
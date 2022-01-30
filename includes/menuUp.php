<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>

    <style>
        .navbar {
            min-height: 80px;
            font-size: 17px;
            padding: 10px;
            font-family: Segoe UI;
            background-color: steelblue;
        }
        a{
            color: white !important;
        }
    </style>

    <nav class="navbar navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="accueil.php" class="navbar-brand" title="Journal éléctroniquen de  l'ISPT-KIN">
                    <i class="fa fa-globe small"> </i>
                    Lisungu Plateforme
                </a>
            </div>

            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['user'])){
                    $user = $_SESSION['user']['username'];
                    echo "
                    <li> <a href='#' title='User'> $user  <i class='glyphicon glyphicon-user '> </i> </a></li>
                    <li><a href='../back/Sedeconnecter.php' title='Déconnexion'><i class='glyphicon glyphicon-log-out '></i>
                            Déconnexion</a></li>
                    ";
                }else{
                    echo "";
                } ?>
                
            </ul>
        </div>
    </nav>

</body>

</html>
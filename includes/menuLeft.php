<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/menuLeft.css">

    <title>Menu</title>
</head>

<style>
    .navbar {
        min-height: 80px;
        font-size: 17px;
        padding: 10px;
        color: white !important;
        font-family: Segoe UI;
    }

    .active {
        border-bottom: 3px solid #428bca;
        width: 90%;
    }

    .ul {
        padding: 0;
    }
</style>

<body>

    <div class="vertical-menu">
        <?php $page = basename($_SERVER['PHP_SELF']); ?>
        <ul class="ul">
            <?php if (isset($_SESSION['user'])) {
            ?>
                <li class='<?php if ($page == 'index.php') : echo 'active';
                            endif; ?>'>
                    <a href='../view/index.php'> <i class='fa fa-home'></i> Dashboard </a>
                </li>
                <li class='<?php if ($page == 'fondation.php') : echo 'active';
                            endif; ?>'>
                    <a href='../view/fondation.php'> <i class='fa fa-globe'></i> Fondations</a>
                </li>

                <li class='<?php if ($page == 'donEffectues.php') : echo 'active';
                            endif; ?>'>
                    <a href='../view/donEffectues.php'><i class='fa fa-users'></i> Dons Effectués</a>
                </li>

                <a href='#'> <i class='fa fa-users'></i> Membres</a>
            <?php } ?>
            } else {
            echo "";
            }
            ?>

        </ul>
    </div>

</body>

</html>
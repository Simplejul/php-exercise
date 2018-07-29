<?php
        session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h3>En GET:</h3>
    <p>Nom: </p>
        <?php
            echo $_SESSION['nom'];
        ?>

    <p>Prenom: </p>
        <?php
            echo $_SESSION['prenom'];
        ?>

    <h3>Cookie</h3>
    <p>login:</p>
        <?php
        echo $_COOKIE["cooklogin"];
        ?>
    <p>login:</p>
        <?php
        echo $_COOKIE["cookpwd"];
        ?>
    <a href="/modifcook.php">Modifier Cookie</button>
</body>
</html>
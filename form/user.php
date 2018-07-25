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
            echo $_GET[nom];
        ?>

    <p>Prenom: </p>
        <?php
            echo $_GET[prenom];
        ?>

    <h3>En POST:</h3>
        <p>Nom: </p>
            <?php
                echo $_POST[nom];
            ?>

        <p>Prenom: </p>
            <?php
                echo $_POST[prenom];
            ?>
</body>
</html>
<!-- index.php?nom=Nemare&prenom=Jean -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>


    <h3>Exo1</h3>
    <a href="index.php?nom=Nemare&prenom=Jean">adresse: index.php?nom=Nemare&prenom=Jean</a>
    <?php
        if (isset($_GET[nom]) && isset($_GET[prenom])){
            echo $_GET[nom]." + ".$_GET[prenom];
        }
    ?>

    <h3>Exo2</h3>
    <a href="index.php?nom=Nemare&prenom=Jean">adresse: index.php?nom=Nemare&prenom=Jean</a>
    <?php
        if (isset($_GET[nom]) && isset($_GET[prenom]) && isset($_GET[age])){
            echo $_GET[nom]." + ".$_GET[prenom]." + ".$_GET[age];
        }else{
            echo $_GET[nom]." + ".$_GET[prenom]." + Pas d age";
        }
    ?>

    <h3>Exo3</h3>
    <a href="index.php?dateDebut=2/05/2016&dateFin=27/11/2016">adresse: index.php?dateDebut=2/05/2016&dateFin=27/11/2016</a>

    <h3>Exo4</h3>
    <a href="index.php?langage=PHP&serveur=LAMP">adresse: index.php?langage=PHP&serveur=LAMP</a>

    <h3>Exo5</h3>
    <a href="index.php?semaine=12">adresse: index.php?semaine=12</a>

    <h3>Exo6</h3>
    <a href="index.php?batiment=12&salle=101">adresse: index.php?batiment=12&salle=101</a>

    <h3>Resultat:</h3>
    <p>
        <?php
        foreach ($_GET as $key => $value) {
            if (isset($key)){
                echo $value." ";
            }
        }
        ?>
    </p>
</body>
</html>

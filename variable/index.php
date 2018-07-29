<?php
        session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Variable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    echo "Ton user agent: </br>".$_SERVER['HTTP_USER_AGENT']."</br></br>";

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    echo "Ton adresse ip: </br>".$ip."</br></br>";

    echo "Le nom du serveur :</br>".$_SERVER['SERVER_NAME']."</br></br>";
    ?>
<?php
        if (empty($_GET)){
            session_start();
?>
        <h3>Exo5: </h3>
        <form action="/user.php" method="get">
        <div>
        <label for="civil">Civilité</label>
        <select name="civil" id="civil">
            <option value="monsieur">monsieur</option>
            <option value="madame">madame</option>
        </select>
        </div>
        <div>
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        </div>
        <div>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        </div>
        <div>
        <button  type="submit">Envoyer</button>
        </div>
        </form>

        <form action="/" method="post">
        <div>
        <label for="login">Login</label>
        <input type="text" name="login" id="login">
        </div>
        <div>
        <label for="password">Password</label>
        <input type="pwd" name="password" id="password">
        </div>
        <div>
        <button  type="submit">Envoyer</button>
        </div>
        <a href="/user.php">Page user</a>
        </form>
<?php
        };
?>

<?php
$_SESSION['nom'] = "lolita";
$_SESSION['prenom'] = "jackie";

$t = "testcook";
if ( $_POST['login'] != null )
{
  setcookie( "cooklogin", $_POST['login'], time() + 36000 );
  setcookie( "cookpwd", $_POST['password'], time() + 36000 );
}

?>

</body>
</html>
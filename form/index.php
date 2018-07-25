<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


        <h3>Exo1: GET</h3>
        <form action="/user.php" method="get">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit">Envoyer</button>
        </form>

        <h3>Exo2: POST</h3>
        <form action="/user.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom">
        <button type="submit">Envoyer</button>
        </form>
        
        <?php
        if (empty($_GET)){
            echo "
        <h3>Exo5: </h3>
        <form action=\"/\" method=\"get\">
        <div>
        <label for=\"civil\">Civilité</label>
        <select name=\"civil\" id=\"civil\">
            <option value=\"monsieur\">monsieur</option>
            <option value=\"madame\">madame</option>
        </select>
        </div>

        <label for=\"nom\">Nom</label>
        <input type=\"text\" name=\"nom\" id=\"nom\">
        <label for=\"prenom\">Prenom</label>
        <input type=\"text\" name=\"prenom\" id=\"prenom\">
        <div>
        <label for=\"fichier\">Fichier</label>
        <input type=\"file\" name=\"fichier\" />
        </div>
        <button type=\"submit\">Envoyer</button>
        </form>
        ";
        }else{
            echo "<h1>Nothing</h1>";
            if ($_FILES["fichier"]["error"] > 0)
            {
                echo "Error: " . $_FILES["fichier"]["error"] . "<br />";
            }
            else
            {
                echo "Upload: " . $_FILES["fichier"]["name"] . "<br />";
                echo "Type: " . $_FILES["fichier"]["type"] . "<br />";
                echo "Size: " . ($_FILES["fichier"]["size"] / 1024) . " Kb<br />";
                echo "Stored in: " . $_FILES["fichier"]["tmp_name"];
            }
        }
        ?>
        
</body>

</html>
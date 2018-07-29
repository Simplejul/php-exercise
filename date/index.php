<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Date</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <?php
        echo date("d/m/Y")."</br>";
        echo date("d-m-Y")."</br>";
        echo date("D j F Y")."</br>";
        setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
        echo (strftime("%A %d %B %Y"))."</br>"."</br>"; 

        $date = new DateTime();
        echo $date->getTimestamp()."</br>"."</br>";

        // mardi 2 août 2016 à 15h00
        $date2 = new DateTime('2016-08-02 15:00:00');
        echo $date2->format('Y-m-d')."</br>";
        echo $date2->getTimestamp()."</br>"."</br>";

        ##Exercice 5 Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
        $date3 = new DateTime('2016-05-16');
        $date4 = new DateTime();
        $days  = $date4->diff($date3)->format('%a');
        echo $days."</br>"."</br>";
        ##Exercice 6 Afficher le nombre de jour dans le mois de février de l'année 2016.
        $numberdays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
        echo $numberdays."</br>"."</br>";
        ##Exercice 7 Afficher la date du jour + 20 jours.
        echo date('y/m/d', strtotime("+20 days"));
        ##TP Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
    ?>
    
</body>
</html>
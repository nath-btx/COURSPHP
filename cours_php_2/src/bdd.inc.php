<?php
try{// On se connecte à MySQL
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=user', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
    
  // On récupère tout le contenu de la table classement
    $reponse = $bdd->query('SELECT * FROM langage');

// On affiche chaque entrée une à une

    while ($donnees = $reponse->fetch()){

            /* pour tester avant*/ echo "<pre>".print_r($donnees)."</pre>";
/*
        echo "<tr>";
            print_r ("<td> ". $donnees ."<td>");
        echo "</tr>";
        */
    }
        

    // on affiche les informations de l'enregistrement en cours
       

    $reponse->closeCursor(); // Termine le traitement de la requête

    }
    //partie finale
    catch(Exception $e){
    // En cas d'erreur précédemment, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
    }
?>
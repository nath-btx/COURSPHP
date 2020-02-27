<?php
// select de la BDD
try{// On se connecte à MySQL
    $bdd= new PDO('mysql:host=localhost; dbname=article;charset-utf8','root','');
 

$req = $bdd->query('SELECT titre, contenu, date_creation, date_modification from post ORDER BY date_creation ASC LIMIT 10');
    while ($donnees = $req->fetch()){
        echo '<article>';
            echo (' <h2>' . $donnees['titre'] . '</h2>
                    <p>' . $donnees['contenu'] . '</p>
                    <time>' . $donnees['date_creation'] . '</time>');
        echo '</article>';
    }

    $req->closeCursor();
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
    }
?>
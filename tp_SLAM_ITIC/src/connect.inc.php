<?php

try{
    $bdd= new PDO('mysql:host=localhost; dbname=cine;charset-utf8','root','');
}
catch(Exception $e){
    die('Erreur : '. $e->getMessage());
}
//ajouter le contenu dans les champs

$req = $bdd->query('SELECT * from sorties');
    while ($donnees = $req->fetch()){
        echo (' <figure> <img src="./'.$donnees['affiche'].'" alt="'.$donnees['titre'].'">
                <figcaption> 
                <p> <strong> Titre : </strong>'. $donnees['titre'] .'</p>
                <p> <strong> Date de sortie : </strong>'. $donnees['realisteur'] .'</p>
                <p> <strong> Acteurs : </strong>' .$donnees['acteurs'] .'</p>
                <p> <strong> Genre : </strong>' .$donnees['genre'] .'</p>
                <p> <strong> Résumé du film : </strong>' .$donnees['story'] .'</p>  
                </figcaption>             
                </figure>
                ');
}

    $req->closeCursor();


?>
<?php

try{
    $bdd= new PDO('mysql:host=localhost; dbname=article;charset-utf8','root','');
}
catch(Exception $e){
    die('Erreur : '. $e->getMessage());
}
//ajouter le contenu dans les champs

if(isset($_POST['titre'] ) || isset($_POST['contenu'])){
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    //condition
    if(!$titre || !$contenu){
        print '<p class ="warning"> Vous avez oublié le titre ou le contenu </p>';
    }
    else if(is_numeric($titre) || is_numeric($contenu)){
        print '<p class ="warning"> Vous devez saisir des lettres </p>';
    }
    else {
        $date=date('Y-m-d H:i:s');
        //insérer les valeurs dans table
        $req = $bdd->prepare('INSERT INTO post(titre, contenu, date_creation)VALUES(?,?,?)');
        $req->execute(array($titre,$contenu,$date));

        print '<p class="success"> Votre article a été envoyé</p>';
    }
}
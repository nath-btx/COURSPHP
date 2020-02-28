<?php
const title_head = "Cours php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php print title_head; ?> </title>
</head>
<body>
    <h1> <?php print title_head; ?> </h1>
    <?php 
    //les fonctions
    var_dump(strlen(title_head));

    function printout(){
        print sprintf("%s" ,"Hello <br>");
    }
    printout();

    //fonction paramétrée
    function user($nom, $age){
        print sprintf("Hello %s <br> ", $nom. ". Tu as ". $age. " ans.");
        return false;
    }
    user("Jon",20);

    //fonctions anonymes
    $name = "Jorge";
    $displayInfo = function() use(&$name){
        echo sprintf("%s", $name);
    };
    $displayInfo();
    echo "<br/>";
    function calc($n){
        return "Résultat = ".$n*$n;
    }
    print calc(8);
    ?>
</body>
</html>
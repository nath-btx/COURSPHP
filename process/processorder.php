<?php
const prixtablette = 200;
const prixpc = 1000;
const prixportable = 1200;
$date = date('d/m/y, H:i');
$tablettes = $_POST['tablettes'];
$pc = $_POST['pc'];
$portable = $_POST['portable'];
$adresse = $_POST['adresse'];
$_SESSION['user'] = $adresse;

$totalamount = $tablettes * prixtablette + $pc * prixpc + $portable * prixportable;
$totalamount = number_format($totalamount, 2, '.', ' ');




?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technos Prod</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <header>
    <h1>Technos Prod</h1>
    <h2>Voici le résultat de votre commande</h2>
  </header>
<main>
    <section>
        <h2> Votre commande du <?php echo $date;?></h2>
        <h3> Détail de votre commande : </h3>
        <p> Nombre de produit : <?php  echo $tablettes + $pc + $portable; ?></p>


        

    <?php if (empty($_POST['tablettes']) && empty($_POST['pc']) && empty($_POST['portable'])) { ?>
        <p class = "warning"> Attention vous n'avez rien commandé ! </p>
        <p> <a href="./orderform.html"> Revenir à la commande &raquo;</a> </p>
    <?php } 
     else { ?>
        <?php 
        if ($tablettes > 0) {  
        echo '<p> Tablette(s) : '.$tablettes.' </p>';}
        if ($pc > 0) {
        echo '<p> PC : '. $pc.' </p>';}
        if ($portable > 0) {
        echo '<p> Portable(s) : '.$portable.' </p>';}
        }?>

        <p> Le total de votre commande est de : <?php  echo $totalamount ?> </p>
        <p> Adresse : <?php echo '<i>'.$adresse.'</i>'; ?></p>
    </section>
     
</main>
</body>
</html>



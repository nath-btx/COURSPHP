<?php

session_start();

const title = "Session";
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo title; ?> </title>
    <link rel="stylesheet" href ="../css/style.css">
</head>
<body>
    <?php if (isset($_SESSION['prenom']))
    {
        echo 
    "<header>
        <h1> Bonjour, ". $_SESSION['prenom']. "</h1>
    </header>
    <p> Tu as : ". $_SESSION['age']. " ans </p>
    <p> <a href='../index.php'> Retour </a>";
    }
    else 
    {
        echo "<header>
        <h1> Session non active </h1>
        </header>
        <p> <a href='../index.php'> Retour </a>";
    }
    
    ?>
</body>
</html>

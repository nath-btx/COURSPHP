<?php
// On démarre la session
session_start();

if (isset($_POST['prenom']))
{

    $_SESSION['prenom']=$_POST['prenom'];
    $_SESSION['age']= $_POST['age'];
    $_SESSION['nom'] = $_POST['nom'];
}
const title = "Session";
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo title; ?> </title>
    <link rel="stylesheet" href ="./css/style.css">
</head>
<body>
    <?php 
    if (isset($_SESSION['prenom']))
    {
        ?>
        <header>
        <h1> Bonjour, <?php print $_SESSION['prenom']; ?> </h1>
        </header>
        <?php
    }
    else
    {
        echo "
        <header>
        <h1> Bienvenue </h1>
        </header>
        ";
    }
    ?>

    
    <p> Démonstration d'une session <p>
    <p>
    <a href="./pages/session_php.php"> Vos informations </a>
    </p>
    <section class = "wrapper">

        <form action="index.php" method = "post">
            <ul>
                <li> <h2> <label for ="nom"> Informations sur vous </label> </h2> </li>
                <li> <input type="text" id = "nom" name="nom" placeholder="Nom"> </li>
                <li> <input type="text" name="prenom" placeholder="Prénom"> </li>
                <li> <input type="text" name="age" placeholder="Age"> </li>
                <li> <input class="button" type="submit" value="Valider"> </li>
            </ul>
        </form>
                
    </section>
    <p> <a href="./pages/fin_session.php"> Terminer la session </a>
    
</body>
</html>
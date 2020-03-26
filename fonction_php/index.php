<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Connexion</title>
</head>
<body>
    <header>
        <h1> Class </h1>
    </header>
    <form action="index.php" method = "post">
            <ul>
                 <h2> <label for ="nom"> Connexion </label> </h2> 
                 <input type="text" name="prenom" placeholder="Prénom"><br> 
                 <input type="password" id = "pass" name="pass" placeholder="mot de passe"> <br>
                 <input type="email" id="mail" name = "mail" placeholder = "e-mail"> <br>
                 <input class="button" type="submit" value="Valider"> 
            </ul>
    </form>
    <?php

        if(isset($_POST['prenom']) && isset($_POST['pass']) && isset($_POST['mail'])){
            if($_POST['prenom'] && $_POST['pass'] && $_POST['mail']){
                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail'])){

                require_once 'class.php';
                $login = $_POST['prenom'];
                $pass = $_POST['pass'];
                $mail = $_POST['mail'];
                $User = new Inscription($login,$pass, $mail);
                $User->getname();

            }
            else {
                print '<p> Erreur d e-mail <br> <p>mail : '.$_POST["mail"].'</p>';
            }
        }
            else{

                print '<p> Erreur au mot de passe ou login </p>';

            }

        }
    
    ?>
</body>
</html>
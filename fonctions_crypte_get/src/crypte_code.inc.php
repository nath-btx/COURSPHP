<?php
    //print "<p> Non crypté rasmusledorf </p>";
    echo "<p>".password_hash("rasmusledorf", PASSWORD_DEFAULT)."</p>";
    $option = ['cost'=>12,];
    echo "<p>".password_hash("rasmusledorf", PASSWORD_BCRYPT, $option)."</p>";

    function verifMail(){
        // vérifier adresse mail
        $_mail_a = "adioz@gmail.com";
        $_mail_b = "ciao@gmail.com";

        if(filter_var($_mail_a,FILTER_VALIDATE_EMAIL)){
            print "<p>l'adresse mail ".$_mail_a." est considéré valide";
        }
        else {
            print "non valide";
        }
    }
    verifMail();
/*
vérification d'une adresse mail
<?php
if (isset($_POST['mail']))
{
    $_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }
}
*/
?>

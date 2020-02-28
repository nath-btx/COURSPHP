<?php 
    include_once("./public/title.inc.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title_head; ?></title>
    <link rel="stylesheet" href="./css/style.css" type="css">
</head>
<body>
    <header>
        <?php echo title_head. " : les requêtes php formulaire"; ?>
    </header>
    <form action = "./password.php" method="get">
    <label for="pswrd"> Saisissez votre code secret ?</label>
    <input id = "pswrd" type="password" placeholder="Votre code secret" name = "pswrd" autofocus required>
    <button type="submit"> Envoyer </button>
    </form>
    <?php
    include_once("./src/pswrdcheck.inc.php");
    ?>

</body>
</html>
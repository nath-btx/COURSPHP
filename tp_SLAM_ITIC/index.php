<?php
const title = "Les sorties de la semaine";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="icon" type="image/png" href="./img/allocine-small.png">

    <title><?php print title; ?></title>
</head>
<body>
    <header>
        <h1>
            <?php print title; ?>
        </h1>
    </header>
    <main>

    <?php include_once "./src/connect.inc.php"; ?>
    </main>
    <footer> Natoz&trade; </footer>
</body>
</html>

<?php
include_once("./src/head.inc.php");
?>
<!-- head.inc.php -->
<a href="./pub.php"> pub.php </a>

    <section>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <label for="titre"> Saisir un titre </label>
            <input type="text" id="titre" name="titre" placeholder="Votre titre" autofocus>
            <label for="contenu"> Insérer un contenu </label>
            <textarea name="contenu" id="contenu"> Ici le contenu ... </textarea>
            <input type="submit" value="Envoyer">
            <?php include_once("./src/connect.inc.php") ?>
        </form>
    </section>
    
<!-- footer -->
<?php include_once("./src/foot.inc.php");?>

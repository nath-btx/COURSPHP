<?php 
include_once("./public/static.inc.php");
$navigator = $_SERVER['HTTP_USER_AGENT'];
?>
<!-- head -->
<?php
    require_once("./src/head.inc.php");
?>
<!-- end  -->
<body>
<header>
        <h1><?php print titleCH01; ?></h1>
</header>
<?php 

?>
<main>
<tab>
    <?php
    include_once(".\src\bdd.inc.php"); 
    ?>
</tab>
</main>
</body>
</html>
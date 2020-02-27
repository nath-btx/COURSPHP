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
        <h1><?php print title; ?></h1>
</header>
<main>
    <p><?php echo "Hello ".$navigator; ?> </p>
    <ul>
        <?php
            require_once("./src/tab.inc.php");
        ?>
    </ul>
</main>
<footer>
    <p><?php print "&copy; -NB ".date("d-m-Y")?></p>
    <!--
    <pre>
        <?php
        //print_r($_SERVER);
        ?>
    </pre>
    -->
</footer>
</body>
</html>



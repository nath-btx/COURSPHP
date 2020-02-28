<?php 
    include_once("./public/title.inc.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title_head; ?></title>
    <link rel="stylesheet" href="<?php echo css; ?>" type="css">
</head>
<body>
    <header> 
        <h1>
            <?php echo title_head; ?>
        </h1>
    </header>
    <?php 
    include_once('./src/crypte_code.inc.php');
    ?>
    
</body>
</html>
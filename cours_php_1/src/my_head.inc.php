<?php
include_once("..\public\statis.inc.php");
	
	const title = "Cours php &amp; SQL";
    $name = "Rasmus";
    $lang = "PHP";
    $version = 7.5;
    $date = 1994;
    $navigator = $_SERVER['HTTP_USER_AGENT'];
    $date_to_day = date('d-m-Y');
   

?>
<!-- ch00.php-->
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?php print title ?></title>
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
</head>
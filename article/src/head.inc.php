<?php
const title = "Publier des articles";
define('MYSQL_DATETIME_FORMAT','Y-m-d H:i:s');
define('MYSQL_DATE_FORMAT','Y-m-d');
const css ="./css/style.css";
const icone ="./asset/favicon.ico";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php print css;?>">
    <link rel="icon" type="image/png" href="<?php print icone;?>">

    <title><?php print title; ?></title>
</head>
<body>
    <header><h1><?php print title; ?></h1></header>


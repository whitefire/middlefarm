<?php if (!isset($_GET['pass']) || $_GET['pass'] != 'middlefarm') { die; } ?>

<!doctype html>
<html>
<head>
    <title>Hyra Sillstad Mellangård</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="css/override.css">
</head>
<body>
<div class="container">
    <a href="index.php?pass=middlefarm">
        <img src="images/layout/header.jpg" alt="Epletre">
    </a>
    <?php include('menu.php'); ?>
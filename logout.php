<?php
session_start();
session_destroy();
// print "You have been logged out. <a href='index.php'>Log In</a>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookbook</title>
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="animate.css"> -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    <script src="jqimport.js"></script>
    <script src="main.js"></script>
</head>

<div class="exit">
    <h3>You have been logged out of Your Family Recipe</h3> 

    <a href="index.php"><button>Log back in</button></a>
</div>    
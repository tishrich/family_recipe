<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include_once("user.php");
$db = new DB();

if (!is_numeric($_SESSION['user_id'])) {
  print "You are not logged in";
}
$user_id = $_SESSION['user_id'];
$user = getUserById($user_id);
$first_name= $user['first_name'];



$sql = "
SELECT * 
FROM recipe 
WHERE user_id = {$_SESSION['user_id']}
";

$results = $db->execute($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookbook</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="animate.css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    <script src="jqimport.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <main class="mainCook">
        <div class="nav">
            <span class="welcome">Welcome <?php echo $first_name; ?>! What will you cook today?</span>
            <a href="logout.php">    
                <button class="logout">Log Out</button>
            </a>    
            <a href="index.php">    
                <button class="home">Home</button>
            </a>
                <button class="newrecipe">Create New</button>
        </div>
        <div class="mainContainer">
        <div class="bar"></div>
        <p class="titles">Your Cookbook</p>
            <div class="cook">

                <?php
                
                while($row = $results->fetch_assoc()) {            
                ?>
                <div class="recipe-container">
                    <div class='page'>
                        <p><?= $row['title']; ?></p>
                        <span><?= $row['time']; ?></span>
                        <span><?= $row['ingredients']; ?></span>
                        <img src="imgs/<?= $row['img']; ?>.jpg" alt="">
                        <!-- <a href="<?=$row['recipe_id']; ?>"> -->
                            <button class="view">View</button>
                        <!-- </a>    -->
                    </div>
                <!-- INCLUDE VIEW.PHP HERE     -->
                     <?php include("view.php"); ?>

                </div>
                    
                

                <?php 
                } 
                ?>

            </div>  

        </div>
   </main>
   <?php include("createrecipe.php"); ?>

   
</body>
</html>
                    
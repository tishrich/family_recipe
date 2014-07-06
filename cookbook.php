<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include_once("user.php");
if (!is_numeric($_SESSION['user_id'])) {
  print "You are not logged in";
  die();
}
$user_id = $_SESSION['user_id'];
$user = getUserById($user_id);
$first_name= $user['first_name'];
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
        </div>
        <div class="mainContainer">
        <div class="bar"></div>
        <p class="titles">Your Cookbook</p>
            <div class="cook">
                <div class="page">
                    <p>Bruschetta</p>
                    <span>This is the short description where you describe what your recipe has in it and anything else you'd like to add.</span>
                    <img src="imgs/basilaptzr.jpg" alt="">
                    <button class="view">View</button>
                </div>
                <div class="page">
                    <p>Microgreens</p>
                    <span>This is the short description where you describe what your recipe has in it and anything else you'd like to add.</span>
                    <img src="imgs/microgreen.jpg" alt="">
                    <button class="view">View</button>
                </div>
                <div class="page">
                    <p>Spicy Habanero</p>
                    <span>This is the short description where you describe what your recipe has in it and anything else you'd like to add.</span>
                    <img src="imgs/redhabs.jpg" alt="">
                    <button class="view">View</button>
                </div>
                <div class="page">
                    <p>Microgreens</p>
                    <span>This is the short description where you describe what your recipe has in it and anything else you'd like to add.</span>
                    <img src="imgs/microgreen.jpg" alt="">
                    <button class="view">View</button>
                </div>
                <div class="page">
                    <p>Spicy Habanero</p>
                    <span>This is the short description where you describe what your recipe has in it and anything else you'd like to add.</span>
                    <img src="imgs/redhabs.jpg" alt="">
                    <button class="view">View</button>
                </div>
                <div class="page">
                    <p>Bruschetta</p>
                    <span>This is the short description where you describe what your recipe has in it and anything else you'd like to add.</span>
                    <img src="imgs/basilaptzr.jpg" alt="">
                    <button class="view">View</button>
                </div>
                
            </div>  
            <aside>
                <!-- <a href="create.php"> -->
                    <button class="newrecipe">Create New</button>
                <!-- </a> -->
            </aside>
        </div>
   </main>

   <!-- "VIEW" IN COOKBOOK  -->

<?php include("createrecipe.php"); ?>
   
</body>
</html>
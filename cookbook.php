<?php

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
            <button class="logout">Log Out</button>
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
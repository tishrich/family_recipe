<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include_once("db.php");
include_once("user.php");

$db = new DB();
$errors = [];

//Checking the database to see if the username exists for Login
if($_POST){

  if($_POST['action']=='login'){
    $user = getUserByEmail($_POST['email']);
    if($user){
        $_SESSION["user_id"] = $user['user_id'];
        header('Location: http://localhost/family_recipe/cookbook.php');
        exit();

    }else{
       // print "username not found";   
    }

  } else { 
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $user = getUserById($user_id);

      if($user){
         array_push($errors, "username already exists");
      } else {
        insertuser($firstName, $lastName, $email, $password);
      }
    }
}  

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipe</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="animate.css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    
	<script src="jqimport.js"></script>
	<script src="main.js"></script>
</head>
<body>
	 <!-- MODAL LOGIN/SIGNUP -->
	<div class="overlay">
        <div class="form formlogin">
        	<form action="" method="POST">
                <h2>Log In </h2>
                <label>Email:
                </label>
                <input type="text" name="email"><br>
                <label>Password:
                </label>
                <input type="password" name="password"><br>
                <input type="hidden" name="action" value="login">
                <div class="buttons">
                    <button class="submit">Log In</button>
                </div>    
            </form>
                <a href="index.php">    
                    <button class="close">Close</button>
                </a>    
        </div>

        <div class="form formregister">
        	<form action="" method="POST">
                <h2> Sign Up </h2>
                <label>First Name:
                </label>
                <input type="text" name="firstName"><br>
                <label>Last Name:
                </label>
                <input type="text" name="lastName"><br>
                <label>Email:
                </label>
                <input type="text" name="email"><br>
                <label>Password:
                </label>
                <input type="password" name="password"><br>
                <input type="hidden" name="action" value="register">
                <div class="buttons">
                    <button class="submit">Submit</button>
                </div>
            </form> 
               <a href="index.php">      
                <button class="close">Cancel</button>
               </a> 
        </div>
    </div>
    <!-- NAVIGATION HEADER -->
	<div class="bkimg">	
        <div class="nav">
            <button class="login">Log In</button>
            <button class="signup"><span>Sign Up</span></button>
        </div>   
    <!-- First Section/Imgs/Icons -->
    	<div class="bar"></div>
    		<div class="banner"><img src="imgs/banner_bk.png" alt=""></div>
    		<div class="icons">
    			<img  src="imgs/bake_a.png" alt="">
    			<img  src="imgs/cal.png" alt="">
    			<img  src="imgs/heart.png" alt="">
    			<img  src="imgs/list.png" alt="">
    			<img  src="imgs/lock.png" alt="">
    			<img  src="imgs/share.png" alt="">
    		</div>	
            <div class="titles">
                <span>Recipes</span>
                <span>Calendar</span>
                <span>Love</span>
                <span>Shopping List</span>
                <span>Secret</span>
                <span>Share</span>
            </div>
    	<div class="arrow"><img src="imgs/arrow.png" alt=""></div>
    	<div class="bar bottombar"></div>
	</div>

    <!-- Second -->
    <div class="second">
        <p class="headTitle titles">Your family recipes. What are you hungry for?</p>
                <div class="subTitle"> 
                    <p>Keep them secret or not so secret. Your family recipes are special, they have been passed down from generation to generation. Keep them close and in your computer's memory, especially if you can't remember that special ingredient that makes grandma's famous potatoes so savory.<br><br>

                    Or maybe you took a spin on that one dish everyone likes and made it even better. Now, that dish can start with you and be passed down to the next generation.<br><br>

                    Love new recipes and place them on the calendar for next Friday's dinner party. They'll be a hit and you'll be a hero.<br>

                    Keep those family recipes close ❤</p>
                </div>
    </div>            
	<!-- Footer -->
	<div class="footer">
		<span>Made with hard work and <span class="heart">❤</span>@ RockIT Bootcamp 2014</span><br>
        <span>richards.tishana@gmail.com</span>
	</div>


</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
session_start();
include_once("db.php");


$db = new DB();


if(isset($_POST['submit']) && isset($_SESSION['user_id'])){  

    $updaterecipe = "
        UPDATE recipe 
        SET title = '{$_POST['title']}',
            time = '{$_POST['time']}',
            ingredients = '{$_POST['ingredients']}',
            directions = '{$_POST['directions']}'
        WHERE recipe_id = '{$_POST['recipe_id']}'
        ";

    $db = new DB();
    $db->execute($updaterecipe);


    header('Location: cookbook.php');
    exit();


} else {


    $select = "
        SELECT *
        FROM recipe
        WHERE recipe_id = {$_GET['recipe_id']}
        ";

    $results = $db->execute($select);
    $row = $results->fetch_assoc();


}
//      $db->updaterecipe('recipe', $uprecipe, 'recipe_id');


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="animate.css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    <script src="jqimport.js"></script>
    <!-- // <script src="main.js"></script> -->
</head>

<div class="form createrecipe editRecipe">
    <form action="" method="POST">
        <h2>Edit Your Recipe</h2>
        <input type="hidden" name="recipe_id" value="<?= $row['recipe_id']; ?>">
        <label>Title:
        </label>
        <input name="title" value="<?= $row['title']; ?>"><br>
        <label>Time:
        </label>
        <input name="time" value="<?= $row['time']; ?>"<br>
        <label>Ingredients:
        </label>
        <textarea cols="30" rows="10" name="ingredients"><?= $row['ingredients']; ?></textarea>
        <label>Directions:
        </label>
        <textarea cols="40" rows="20" name="directions"><?= $row['directions']; ?></textarea>
        <div class="buttons">
            <a href="cookbook.php">
                <button type="button" class="cancel">Cancel</button>
            </a>    
            <button class="submit" name="submit">Save Recipe</button>
        </div>    
    </form> 
</div>
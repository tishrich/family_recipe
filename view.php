<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
// include_once("db.php");

// $db = new DB();

// $uprecipe = [
//         'title' => addslashes($_POST['title']),
//         'time' => addslashes($_POST['time']),
//         'ingredients' => addslashes($_POST['ingredients']),
//         'directions' => addslashes($_POST['directions'])
//     ];

// $recipe_results = $db->execute("SELECT title FROM recipe WHERE recipe_id = $recipe_id");
// function updateRecipe($table_name, $updaterecipe, $recipe) {

//     $updaterecipe = "
//     UPDATE recipe 
//     SET title = 'title',
//         time = 'time',
//         ingredients = 'ingredients',
//         directions = 'directions',
//     WHERE recipe_id = '$_SESSION['user_id']'
//     ";
//     $db = new DB();
//     $db->execute($updaterecipe);
//   }

//      $db->updaterecipe('recipe', $uprecipe, 'recipe_id');


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="animate.css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:300' rel='stylesheet' type='text/css'>
    <script src="jqimport.js"></script>
    <script src="main.js"></script>
</head>
    <div class="form viewContent">
        <form action="" method="POST">
            <h2 class="titles">Mom's Breakfast Potatoes</h2>
            <span>Time:</span>
            <div>
                <p>Prep Time: 20 min Total Time: 45 min</p>
            </div>    
            <span>Ingredients:</span>
            <div>
                <p>2 cups of potatoes
                    1/4 of a large onion
                    cooking oil
                    paprika</p>
            </div>  
            <span>Directions:</span>
            <div>
                <p>Step 1) In a medium pot boil about 4 cups of water and add some salt to taste.<br>
                    Step 2) While it's preparing to boil peel your potatoes and cut them into 1/4th size cubes.<br>
                    Step 3) Chop up your onions<br>
                    Step 4) When the water comes to a boil add in your potatoes. Once it's soft enough to stick a fork easily through strain out the water and put your potatoes aside.<br>
                    Step 5) With an empty pot add your oil to enough to cover the bottom of the pot.<br>
                    Step 6) Sautee the onions until they are lightly brown.<br>
                    Step 7)  Add the potatoes in with the onions and carefully mix them together.<br>
                    Step 8) Top with a sprinkle of paprika and serve!<br>
                </p>
            </div>  
            <div class="buttons">
                <button class="edit">Edit</button>
                <button>Ok</button>
            </div>    
        </form> 
    </div>
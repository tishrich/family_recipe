<?php
include_once("db.php");

function getTitle($title){
  $db = new DB();
  $select = "select * from recipe where title = '$title'";
  $results = $db->execute($select);
  return $results->fetch_assoc();
}


function getTime($time){
  $db = new DB();
  $select = "select * from recipe where time = $time";
  $results = $db->execute($select);
  return $results->fetch_assoc();
}

function getIngredients($ingredients){
  $db = new DB();
  $select = "select * from recipe where ingredients = $ingredients";
  $results = $db->execute($select);
  return $results->fetch_assoc();
}

function getDirections($directions){
  $db = new DB();
  $select = "select * from recipe where directions = $directions";
  $results = $db->execute($select);
  return $results->fetch_assoc();
}

function insertRecipe($user_id, $title, $time, $ingredients, $directions){
    $insertrecipe = "
    INSERT INTO recipe(user_id, title, time, ingredients, directions) 
    VALUES ($user_id, '$title','$time','$ingredients', '$directions')
    ";
    $db = new DB();
    $db->execute($insertrecipe);
    
}

  function updateRecipe($table_name, $updaterecipe, $recipe_id) {

    $update = "
    UPDATE recipe 
    SET title = '$updaterecipe['title']',
        time = '$updaterecipe['time']',
        ingredients = '$updaterecipe['ingredients']',
        directions = '$updaterecipe['directions']',
    WHERE recipe_id = $recipe_id
    ";
    $db = new DB();
    $db->execute($update);
  
  }
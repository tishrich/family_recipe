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

function insertRecipe($title, $time, $ingredients, $directions){
    $insertrecipe = "
    INSERT INTO recipe(title, time, ingredients, directions) 
    VALUES ('$title','$time','$ingredients', '$directions')
    ";
    $db = new DB();
    $db->execute($insertrecipe);
    
}

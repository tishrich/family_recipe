 <?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
include_once("db.php");
include_once("createrecipedb.php");

 $db = new DB();
if(isset($_POST['submit'])){  
    $recipe = [
        'title' => addslashes($_POST['title']),
        'time' => addslashes($_POST['time']),
        'ingredients' => addslashes($_POST['ingredients']),
        'directions' => addslashes($_POST['directions'])
    ];

    $db->insert('recipe', $recipe);
     
}else{
    echo "didn't work";
}



?>

 <div class="overlay">
    <main class="mainCreate">
        <div class="bar"></div> 
        <div class="mainContainer">
            <p class="titles">Create A Recipe</p>
            <div class="form createrecipe">
                <form action="" method="POST">
                    <h2> Add A Recipe</h2>
                    <label>Title:
                    </label>
                    <input type="text" name="title" placeholder="Mom's Breakfast Potatoes"><br>
                    <label>Time:
                    </label>
                    <input type="text" name="time" placeholder="Prep Time: 20 min Total Time: 1 hr(s)"><br>
                    <label>Ingredients:
                    </label>
                    <textarea name="ingredients" id="" cols="30" rows="10" placeholder="ex: 2 cups of potatoes"></textarea>
                    <label>Directions:
                    </label>
                    <textarea name="directions" id="" cols="30" rows="10" placeholder="Step 1....Step 2...."></textarea>
                    <div class="buttons">
                        <button class="cancel">Cancel</button>
                        <button class="submit" name="submit">Add Recipe</button>
                    </div>    
                </form> 
            </div>
            <aside>
                <div class="iconC">
                    <a href="cookbook.php">
                        <img src="imgs/bake_a.png"><br>
                        <span>Go To Cookbook</span>
                    </a>    
                </div>
            </aside> 

           <!--  <aside>
                <div class="recipeAdd">
                    <h3>Recipes Added To Cookbook</h3>
                </div>
            </aside>    -->
        </div>      
    </main> 
</div>

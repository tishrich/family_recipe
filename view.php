
    <div class="lightbox viewContent">
        <h2 class="titles"><?= $row['title']; ?></h2>
        <span>Time:</span>
        <div>
            <p><?= $row['time']; ?></p>
        </div>    
        <span>Ingredients:</span>
        <div>
            <p><?= $row['ingredients']; ?></p>
        </div>  
        <span>Directions:</span>
        <div>
            <p><?= $row['directions']; ?></p>
        </div>  
        <div class="buttons">
            <a href="edit.php?recipe_id=<?php echo $row['recipe_id']; ?>">
                <button class="edit">Edit</button>
            </a>
            <button class="close-lightbox">Ok</button>
        </div>    
    </div>


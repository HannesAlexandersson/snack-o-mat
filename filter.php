<?php
session_start();
__DIR__. require 'head.php';
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["checkboxes"])) {
        $error = 'Holy guacemoly! The checkboxes are empty!';
        array_push($errors,$error);
        getErrors($errors);    
    }
    elseif (isset($_POST["checkboxes"]) === $_POST["None"]) {
        $selectedCheckboxes = $_POST["None"];
    }   
    elseif (isset($_POST["checkboxes"]) !== $_POST["None"] ) {
        $selectedCheckboxes = $_POST["checkboxes"];       
    } else {
        echo "No checkboxes selected.";
    }
    $filteredArray = sortArray($objectArray, $selectedCheckboxes);    
}
// hade problem med att få till filtreringen. Det slutade med att den blev 'inverterad' dvs att användaren får filtrera det de vill ha istället för att filtrera bort det de inte vill ha
?>
<main>
    <div class="main-container">
        <div class="check-box-container">
            <div class="card-container">
                <form method="post" action="filter.php">
                    <p>Please select your preferred filter options. NOTE! Check the options you PREFER, not the ones you dislikes</p><br>
                    <input type="checkbox" name="checkboxes[]" value="None" checked="checked" />None
                    <input type="checkbox" name="checkboxes[]" value="peanut" />Peanut
                    <input type="checkbox" name="checkboxes[]" value="nut" />Nut
                    <input type="checkbox" name="checkboxes[]" value="sugar" />Sugar
                    <input type="checkbox" name="checkboxes[]" value="gluten" />Gluten
                    <input type="checkbox" name="checkboxes[]" value="lactos" />Lactos
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div><?php
    foreach($filteredArray as $category => $items) { ?>
        <div class="main-container">
            <p style="margin-bottom: -0.5rem; padding-top: 0.5rem;"><?= $category ?></p>
            <hr style="width: 91%;">
            <div class="card-container">            
                <?php getObject($items)?>                
            </div>
        </div><?php 
    }?>
</main>
<?php
__DIR__. require 'footer.php';
?>
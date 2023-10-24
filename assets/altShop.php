<?php
session_start();
__DIR__. require 'head.php' ;
if (isset($_POST['id'])) {
    $userChoice = $_POST['id'];//saving the querystrings into variables for handling
    $itemPrice = (int)$_POST['price'];//making the string"price"into integer for calculus operations
    array_push($userCart,['product' =>$userChoice,'price' => $itemPrice]); //push they products into the array of the usercart    
}
if (isset($_POST['clear_cart'])) {
    $userCart = []; // Clear the cart when the "Clear Cart" button is clicked
}
?>
<main>
    <div class="main-container nuts">
        <p style="
        margin-bottom: -0.5rem;    
        padding-top: 0.5rem;"
        >Nuts</p>
        <hr style="width: 91%;">
        <div class="card-container"><?php
            getObject($nutsArray)?>
        </div>
    </div>
    <div class="main-container chips">
        <p style="
        margin-bottom: -0.5rem;    
        padding-top: 0.5rem;"
        >Chips</p>
        <hr style="width: 91%;">
        <div class="card-container"><?php
    getObject($crispArray)?>
    </div>
    </div>
    <div class="main-container crackers">
        <p style="
        margin-bottom: -0.5rem;    
        padding-top: 0.5rem;"
        >Crackers</p>
        <hr style="width: 91%;">
        <div class="card-container"><?php
    getObject($crackersArray)?>
    </div>
    </div>
    <div class="main-container sauce">
        <p style="
        margin-bottom: -0.5rem;    
        padding-top: 0.5rem;"
        >Sauce</p>
        <hr style="width: 91%;">
        <div class="card-container"><?php
    getObject($sauceArray)?>
    </div>
    </div>
    <div class="main-container sparkling">
        <p style="
        margin-bottom: -0.5rem;    
        padding-top: 0.5rem;"
        >Sparkling Drinks</p>
        <hr style="width: 91%;">
        <div class="card-container"><?php
    getObject($sparklingArray)?>
    </div>
</div>
    <div class="main-container still">
        <p style="
        margin-bottom: -0.5rem;    
        padding-top: 0.5rem;"       
        >Still Drinks</p>
        <hr style="width: 91%;">
        <div class="card-container"><?php
    getObject($stillArray)?>
    </div>
</div>
<div class="cart-container main-container" id="cart">
        <div class="cart-container">
            <?php getCart($userCart)?>
        </div>
    </div>
</main>
<?php
__DIR__. require 'footer.php';
?>
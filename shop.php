<?php
session_start();
__DIR__. require 'head.php' ;
if (isset($_POST['id'])) {
    $userChoice = $_POST['id'];
    $itemPrice = (int)$_POST['price'];
    array_push($userCart,['product' =>$userChoice,'price' => $itemPrice]); //push they products into the array of the usercart  
    var_dump($userCart);
}
if (isset($_POST['clear_cart'])) {
    $userCart = []; // Clear the cart when the "Clear Cart" button is clicked
}
?>
<main>
    <?php foreach($objectArray as $category => $items) { ?>
        <div class="main-container">
            <h5 style="margin-bottom: -0.5rem; padding-top: 0.5rem;"><?= $category ?></h5>
            <hr style="width: 91%;">
            <div class="card-container">            
                <?php getObject($items)?>                
            </div>
        </div>
        <?php } ?>    
</main>
<div class="cart-container main-container" id="cart">
        <div class="cart-container">
            <?php getCart($userCart)?>
        </div>
    </div>
</main>
<?php
__DIR__. require 'footer.php';
?>
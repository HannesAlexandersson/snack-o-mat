<?php
session_start();
__DIR__. require 'head.php' ;
?>
<main>
<div class="cart-container main-container" id="cart">
        <div class="cart-container">
            <?php getCart($userCart)?>
        </div>
    </div>
</main>


<?php
__DIR__. require 'footer.php' ;
?>
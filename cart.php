<?php
session_start();
__DIR__. require 'head.php' ;

?>
<main>
    <div class="cart-container main-container">
        <div class="card-container">
            <?=getCart($userCart)?>
        </div>
    </div>
</main>


<?php
__DIR__. require 'footer.php' ;
?>
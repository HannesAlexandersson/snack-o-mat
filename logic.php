<?php
__DIR__ . require 'object-array.php';
__DIR__. require 'head.php' ;

__DIR__. require 'header.php' ;?>
<main>
    <div class="main-container nuts">Nuts<?php
    getObject($nutsArray)?>
    </div>
    <div class="main-container chips">Chips<?php
    getObject($crispArray)?>
    </div>
    <div class="main-container crackers">Crackers<?php
    getObject($crackersArray)?>
    </div>
    <div class="main-container crackers">Sauce<?php
    getObject($sauceArray)?>
    </div>
    <div class="main-container crackers">Sparkling Drinks<?php
    getObject($sparklingDrinks)?>
    </div>
    <div class="main-container crackers">Still Drinks<?php
    getObject($stillDrinks)?>
    </div>
</main>
<?php
        __DIR__. require 'footer.php';
?>
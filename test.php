<?php
__DIR__. require 'object-array.php';
__DIR__. require 'functions.php';?>
<main>
    <?php foreach($objectArray as $category => $items) { ?>
        <div class="main-container">
            <p style="margin-bottom: -0.5rem; padding-top: 0.5rem;"><?= $category ?></p>
            <hr style="width: 91%;">
            <?php foreach($items as $itemId => $itemData) { ?>
                <div class="card-container">
                    <?php getObject($items)?>
                </div>
            <?php } ?>

        </div>
    <?php } ?>
</main>

<?php

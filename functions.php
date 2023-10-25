<?php
declare(strict_types=1);
function getObject (array $objectArray):void
{
    foreach ($objectArray as $object => $data){?>
        <div class="main-items"><?=$object?>
               <div class="card-content">
                <div class="image-content">
               <img class="image long" src="<?=$data['bild']?>">
                </div>
                <div class="card-info">
                   <p>Pris:<?=$data['price']?>kr</p>
                   <p>Allergenics:<?=$data['allergic']?></p>
                </div>
               </div>
               <div class="buttons">
                <form action="shop.php" method="post"> 
                    <input type="hidden" name="id" value="<?=$data['id']?>"> 
                    <input type="hidden" name="price" value="<?= $data['price'] ?>">                  
                    <input class="button köp <?=$data['id']?>" type="submit" value="Köp" name="<?=$data['id']?>">
                </form>
                <form action="shop.php" method="post">
                    <input type="submit" name="clear_cart" value="Clear Cart">
                </form>                   
               </div>
           </div><?php 
   }
};
function create_logo():string
{
   return'<img class="logo" src="assets/ha.png" />';   
}
function create_copyright():string
{
    $year = date('Y');
    $message = '&copy; '.$year;
    return $message;
}

function getCart(array $userCart):void
{
    $totalPrice = 0;
    ?>
    <div>
        <p>Your products:</p>
    </div>
    <?php
    foreach ($userCart as $item) {
        ?>
        <div>
            <p><?= $item['product'] ?>: <?= $item['price'] ?> kr</p>
        </div>
        <?php
        $totalPrice += $item['price'];
    }
    ?>
    <div>
        <p>Full Price: <?= $totalPrice ?> kr</p>
    </div>
    <form action="shop.php" method="post">
        <input type="submit" name="clear_cart" value="Check-out">
    </form>                   
    <?php
};
function sortArray(array $objectArray, array $selectedCheckboxes): array
{
    $filteredArray = [];

    foreach ($objectArray as $category => $items) {
        $filteredItems = [];
        
        foreach ($items as $itemName => $itemData) {
            if (in_array($itemData['allergic'], $selectedCheckboxes)) {
               
                $filteredItems[$itemName] = $itemData;
            }
        }

        if (!empty($filteredItems)) {
            
            $filteredArray[$category] = $filteredItems;
        }
    }

    return $filteredArray;
};
function getErrors(array $errors):void
{
    foreach($errors as $error){?>
    <div class="alert">
        <?=$error?>
    </div><?php
    }
};
function getRandom(array $objectArray)
{
    
}
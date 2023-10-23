<?php
declare(strict_types=1);
function getObject (array $objectArray):void
{
    foreach ($objectArray as $object => $data){?>
        <div class="main-items"><?=$object?>
               <div class="card-content">
               <img class="image long" src="<?=$data['bild']?>">
                   <p>Pris:<?=$data['price']?>kr</p>
                   <p>Allergenics:<?=$data['allergic']?></p>
               </div>
               <div class="buttons">
                   <img class="button köp" src="assets/köp.png">
               </div>
           </div><?php
   }
};

/* foreach ($crispArray as $crisp => $data){?>
    <div class="main-items">
           <div class="card-content">
           <img class="image long" src="<?=$data['bild']?>">
               <p>Pris:<?=$data['price']?>kr</p>
               <p>Allergenics:<?=$data['allergic']?></p>
           </div>
           <div class="buttons">
               <img class="button köp" src="assets/köp.png">
           </div>
       </div><?php
}?> */
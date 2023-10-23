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
                   <ion-icon name="backspace-outline"></ion-icon>
               </div>
           </div><?php
   }
};
function create_logo(){
   return'<img class="logo" src="assets/ha.png" />';   
}
function create_copyright(){
    $year = date('Y');
    $message = '&copy; '.$year;
    return $message;
}
<?php
session_start();

if (!isset($_SESSION['userCart'])) {
    $_SESSION['userCart'] = [];//superglobal variable för att kunna användas i alla scoop och alla sessions
}
$userCart = &$_SESSION['userCart']; // omvandla till referens för enklare hantering

if ( !isset($_SESSION['packPrice'])){
    $_SESSION['packPrice'] = 100;
}
$packPrice = &$_SESSION['packPrice'];

if ( !isset($_SESSION['preFab'])){
    $_SESSION['preFab'] = 'preFab';
}
$preFab_ID = &$_SESSION['preFab'];


 $objectArray = 
[
    'Nuts' =>
    [
        'Roasted-peanuts' =>
        [        
            'price' => 30,
            'allergic' => 'peanut',
            'bild' => 'assets/Roasted-Peanuts.png',
            'id' => 'Roasted-peanuts'  
        ],
        'Roasted-almonds' =>
        [
            'price' => 30,
            'allergic' => 'nut',
            'bild' => 'assets/Salted-almonds.png',
            'id' => 'Roasted-almonds'         
        ],
        'Pistachios' =>
        [
            'price' => 30,
            'allergic' => 'nut',
            'bild' => 'assets/Pistagenötter.png',
            'id' => 'Pistachios'        
        ],
        'Cashews' =>
        [
            'price' => 30,
            'allergic' => 'nut',
            'bild' => 'assets/cashew-nuts.png',
            'id' => 'Cashews'        
        ]
    ],
    'Crisps' =>
    [      
        'Ranch' =>
        [
            'price' => 30,
            'allergic' => 'gluten',
            'bild' => 'assets/Estrella-Ranch.png',
            'id' => 'Peach'
        ],
        'Vinegar' =>
        [
            'price' => 30,
            'allergic' => 'gluten',
            'bild' => 'assets/vinegar.png',
            'id' => 'Ranch'
        ],
        'Sourcream' =>
        [
            'price' => 30,
            'allergic' => 'gluten',
            'bild' => 'assets/sourcreame.png',
            'id' => 'Sourcream'
         ],
         'Hot' =>
         [
            'price' => 30,
            'allergic' => 'lactos',
            'bild' => 'assets/hot.png',
            'id' => 'Hot'
        ]    
    ],
    'Sauce' =>
    [   
        'Garlic' =>
    [
            'price' => 30,
            'allergic' => 'lactos',
            'bild' => 'assets/garlic.png',
            'id' => 'Garlic'
         ],
         'bea' =>
         [
            'price' => 30,
            'allergic' => 'lactos',
            'bild' => 'assets/bea.png',
            'id' => 'bea'
        ],
        'curry' =>
        [
            'price' => 30,
            'allergic' => 'lactos',
            'bild' => 'assets/curry.png',
            'id' => 'curry'
        ],
        'Hot' =>
        [
            'price' => 30,
            'allergic' => 'gluten',
            'bild' => 'assets/hot-sauce.png',
            'id' => 'Hot'
        ]
    ],
    'Crackers' =>
    [
        'Cheese-crackers' =>
    [
            'price' => 30,
            'allergic' => 'gluten',
            'bild' => 'assets/crackers-cheese.png',
            'id' => 'Cheese-crackers'
        ],
        'PeanutButter-crackers' => 
        [
            'price' => 30,
            'allergic' => 'peanut',
            'bild' => 'assets/crackers-peanut.png',
            'id' => 'PeanutButter-crackers'
        ]
    ],
    'Sparkling' =>
    [
        'Coco-cool' =>
    [
            'price' => 30,
            'allergic' => 'sugar',
            'bild' => 'assets/coco-cool.png',
            'id' => 'Coco-cool'
        ],
         'Fonto' =>
        [
            'price' => 30,
            'allergic' => 'sugar',
            'bild' => 'assets/fonto.png',
            'id' => 'Fonto'
        ],
        'Popsi' =>
        [
            'price' => 30,
            'allergic' => 'sugar',
            'bild' => 'assets/popsi.png',
            'id' => 'Popsi'
        ],
    ],
    'Still' =>   
    [
        'Orango' => 
    [
            'price' => 30,
            'allergic' => '',
            'bild' => 'assets/orango.png',
            'id' => 'Orango'
        ],
        'Appleoppo' =>
        [
            'price' => 30,
            'allergic' => 'sugar',
            'bild' => 'assets/appleoppo.png',
            'id' => 'Appleoppo'
        ],
        'Peach' =>
        [
            'price' => 30,
            'allergic' => 'sugar',
            'bild' => 'assets/peach.png',
            'id' => 'Peach'
        ]        
    ]
];

 




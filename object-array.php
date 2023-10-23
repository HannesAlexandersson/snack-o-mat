<?php
$nutsArray =  
[
    'Roasted-peanuts' =>
    [
        'price' => 30,
        'allergic' => 'peanut',
        'bild' => 'assets/Roasted-Peanuts.png'       
    ],
    'Roasted-almonds' =>
    [
        'price' => 30,
        'allergic' => 'peanut',
        'bild' => 'assets/Salted-almonds.png'        
    ],
    'Pistachios' =>
    [
        'price' => 30,
        'allergic' => 'peanut',
        'bild' => 'assets/Pistagenötter.png'        
    ],
    'Cashews' =>
    [
        'price' => 30,
        'allergic' => 'peanut',
        'bild' => 'assets/cashew-nuts.png'        
    ]
];

$crispArray = 
[      
    'Ranch' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/Estrella-Ranch.png'
    ],
    'Vinegar' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/vinegar.png'
    ],
    'Sourcream' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/sourcreame.png'
     ],
    'Hot' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/hot.png'
    ]    
];

$sauceArray = 
    
[   
    'Garlic' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/garlic.png'
     ],
    'bea' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/bea.png'
    ],
    'curry' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/curry.png'
    ],
    'Hot' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/hot-sauce.png'
    ]
];

$crackersArray = 
[
    'Cheese-crackers' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/crackers-cheese.png'
    ],
    'PeanutButter-crackers' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/crackers-peanut.png'
    ]
];


// beverage array containing the diffrent beverages
$sparklingArray =     
[
    'Coco-cool' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/coco-cool.png'
    ],
    'Fonto' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/fonto.png'
    ],
    'Popsi' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/popsi.png'
    ],
];

$stillArray = 
[
    
    
    'Orango' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/orango.png'
    ],
    'Appleoppo' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/appleoppo.png'
    ],
    'Peach' =>
    [
        'pris' => 100,
        'matrial' => '',
        'bild' => 'assets/peach.png'
    ]
    
];
$sparklingDrinks = 
[
    'Coco-cool' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/cheese-crackers.jpg'
    ],
    'Fanto' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/cheese-crackers.jpg'
    ],
    'Pepso' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/cheese-crackers.jpg'
    ],
];
$stillDrinks = 
[
    'Orango' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/cheese-crackers.jpg'
    ],
    'Appleoppo' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/cheese-crackers.jpg'
    ],
    'Peach' =>
    [
        'pris' => 100,
        'allergic' => '',
        'bild' => 'assets/cheese-crackers.jpg'
    ]
];

/* // en array med alla objects, för att kunna plocka rrandom till prefab packs
$objectArray = [
    'Nuts' =>
    [
        'Roasted-peanuts' =>
        [
            'price' => 30,
            'allergic' => 'peanut',
            'bild' => 'assets/peanut.jpg'        
        ],
        'Roasted-almonds' =>
        [
            'price' => 30,
            'allergic' => 'peanut',
            'bild' => 'assets/peanut.jpg'        
        ],
        'Pistachios' =>
        [
            'price' => 30,
            'allergic' => 'peanut',
            'bild' => 'assets/peanut.jpg'        
        ],
        'Cashews' =>
        [
            'price' => 30,
            'allergic' => 'peanut',
            'bild' => 'assets/peanut.jpg'        
        ]
    ],
    'Crisps' => 
    [   
        'Ranch' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/Estrella-Ranch.png'
        ],
        'Vinegar' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/vinegar.png'
        ],
        'Sourcream' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/sourcreame.png'
        ],
        'Hot' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/hot.png'
        ]
    ],
    'Dip-sauce' =>
    [   
        'Garlic' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/garlic-sauce.jpg'
        ],
        'bea' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/bea-sauce.jpg'
        ],
        'curry-vinegar' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/curryVinegar-sauce.jpg'
        ],
        'Hot' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/Hot-sauce.jpg'
        ]
    ],
    'Crackers' =>
    [
        'Cheese-crackers' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/cheese-crackers.jpg'
        ],
        'PeanutButter-crackers' =>
        [
            'pris' => 100,
            'matrial' => '',
            'bild' => 'assets/peanutButter-crackers.jpg'
        ]
    ]
]; */
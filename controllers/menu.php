<?php
$crud = new CRUD;
$auth = new Auth;
$DB = new DataBase;

$data = [
  'menu' => []
];

$menus = [
  'barbecue' => [
                'menu_name' => 'Barbecue',
                'link' => 'barbecue',
                'options' => [
                [
                  'img' => 'barbecue/flame_gril.jpg',
                  'price' => '£2.50',
                  'h4' => 'Add a dessert',
                  'p' =>'Give us a call and we will arrange the dessert of you choice'
                ],
                [
                  'img' => 'barbecue/grill.jpg',
                  'price' => '£1.75',
                  'h4' => 'Premium Buns',
                  'p' =>'Upgrade to Premium Buns'
                ]
              ]
            ],
  'pig_roast'  => [
                'menu_name' => 'Pig Roast',
                'link' => 'pig_roast',
                'options' => [
                [
                  'img' => 'pig_roast/burger_bab.jpg',
                  'price' => '£3.50',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => 'pig_roast/pig.jpg',
                  'price' => '£3.50',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => 'pig_roast/spit.jpg',
                  'price' => '£3.50',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => 'pig_roast/whole_pig.jpg',
                  'price' => '£3.50',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ]
              ]
            ],
  'carved_buffet' => [
                'menu_name' => 'Carved Buffet',
                'link' => 'carved_buffet',
                'options' => [
                [
                  'img' => 'carved_buffet/chicken_wings.jpg',
                  'price' => '£0',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => 'carved_buffet/roast.jpg',
                  'price' => '£0',
                  'h4' => '',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => 'carved_buffet/trays.jpg',
                  'price' => '£0',
                  'h4' => '',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ]
              ]
            ],
  'hot_food_menu' => [
                'menu_name' => 'Hot Food Menu',
                'link' => 'hot_food_menu',
                'options' => [
                [
                  'img' => 'hot_food/diffrent_plates.jpg',
                  'price' => '£10',
                  'h4' => 'Art hot food Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => 'hot_food/chocolate_cake.jpg',
                  'price' => '£8.75',
                  'h4' => 'Puddings',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ]
              ]
            ],
  'portioned_finger_buffet' => [
                'menu_name' => 'Portioned Finger Buffet',
                'link' => 'portioned_finger_buffet',
                'options' => [
                [
                  'img' => 'barbecue/hot_food_menu.jpg',
                  'price' => '£0',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => '',
                  'price' => '£0',
                  'h4' => '',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ]
              ]
            ],
  'deluxe_portioned_finger_buffet' => [
                'menu_name' => 'Deluxe Portioned Finger Buffet',
                'link' => 'deluxe_portioned_finger_buffet',
                'options' => [
                [
                  'img' => 'barbecue/hot_food_menu.jpg',
                  'price' => '£0',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => '',
                  'price' => '£0',
                  'h4' => '',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ]
              ]
            ],
  'jacket_potato' => [
                'menu_name' => 'Hot Jacket Potato',
                'link' => 'jacket_potato',
                'options' => [
                [
                  'img' => 'barbecue/hot_food_menu.jpg',
                  'price' => '£0',
                  'h4' => 'Kale Chips Art Party',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ],
                [
                  'img' => '',
                  'price' => '£0',
                  'h4' => '',
                  'p' =>'Dreamcatcher squid ennui cliche chicharros nes echo small batch jean ditcher meal...'
                ]
              ]
            ],
  'packed_lunches' => [
                'menu_name' =>'Packed Lunches',
                'link' =>'packed_lunches',
                'options' => [
                [
                  'img' => 'packed_lunches/lunch_bags.jpg',
                  'price' => '£0.50',
                  'h4' => 'Can of your choice',
                  'p' =>'Any can of soft drink'
                ],
                [
                  'img' => 'packed_lunches/lunch_menu.jpg',
                  'price' => '£0.35',
                  'h4' => 'Tuna Niçoise Salad',
                  'p' =>'Tuna Niçoise salad with .....'
                ],
                [
                  'img' => 'packed_lunches/lunch_item.jpg',
                  'price' => '£0.50',
                  'h4' => 'chicken caesar salad',
                  'p' =>'chicken caesar salad'
                ]
              ]
            ],
];

foreach ($menus as $key => $value) {
    if ($key == $_SERVER['QUERY_STRING']) {
        $data['menu'] = $value;
    }
}

// print_r($data);

echo $twig->render('menu.twig', $data);

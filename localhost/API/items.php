<?php
$items = array('items' => [
    'item' => [
        'img' => 'static/img/item1.jpg',
        'title' => 'Air Force 1',
        'description' => 'Классические кроссовки',
        'price_dollars' => '100',
        'color' => 'white'
    ],
    'item2' => [
        'img' => 'static/img/item2.jpg',
        'title' => 'Air Max 90',
        'description' => 'Баскетбольные кроссовки',
        'price_dollars' => '130',
        'color' => 'white'
    ],
    'item3' => [
        'img' => 'static/img/item3.jpg',
        'title' => 'Штаны',
        'description' => 'Спортивные штаны',
        'price_dollars' => '50',
        'color' => 'black'
    ],
    'item4' => [
        'img' => 'static/img/item4.jpg',
        'title' => 'Носки',
        'description' => 'Удобные носки',
        'price_dollars' => '20',
         'color' => 'white'
    ],
    'item5' => [
        'img' => 'static/img/item5.jpg',
        'title' => 'Ветровка',
        'description' => 'Теплая ветровка',
        'price_dollars' => '80',
        'color' => 'black'    ],
    'item6' => [
        'img' => 'static/img/item6.jpg',
        'title' => 'Лонгслив',
        'description' => 'Приятный лонгслив',
        'price_dollars' => '55',
        'color' => 'black'
    ],
    'item7' => [
        'img' => 'static/img/item7.jpg',
        'title' => 'Футболка',
        'description' => 'Хлопковая футболка',
        'price_dollars' => '35',
        'color' => 'black'
    ],
    'item8' => [
        'img' => 'static/img/item8.jpg',
        'title' => 'Толстовка Nike Tech',
        'description' => 'Флисовая теплая толстовка',
        'price_dollars' => '70',
        'color' => 'black'
    ],
    'item9' => [
        'img' => 'static/img/item9.jpg',
        'title' => 'Кепка',
        'description' => 'Стильная бейсболка',
        'price_dollars' => '25',
        'color' => 'white'
    ]
]);

echo json_encode($items, JSON_UNESCAPED_UNICODE);
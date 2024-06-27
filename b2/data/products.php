<?php
/*
    trình bày list products
    + price: format giá tiền
    + neu qty>0 -> qty, nếu qty==0 thì show "out of stock"
*/
$products = [
    [
        'name' => 'Laptop Dell Inspiron',
        'price' => 15000000, // 
        'qty' => 10,
        'image' => 'https://via.placeholder.com/150?text=Dell+Inspiron'
    ],
    [
        'name' => 'MacBook Air',
        'price' => 25000000,
        'qty' => 5,
        'image' => 'https://via.placeholder.com/150?text=MacBook+Air'
    ],
    [
        'name' => 'Asus ROG Strix',
        'price' => 30000000, 
        'qty' => 7,
        'image' => 'https://via.placeholder.com/150?text=Asus+ROG+Strix'
    ],
    [
        'name' => 'HP Pavilion',
        'price' => 20000000,
        'qty' => 0,
        'image' => 'https://via.placeholder.com/150?text=HP+Pavilion'
    ],
    [
        'name' => 'Lenovo ThinkPad',
        'price' => 18000000,
        'qty' => 8,
        'image' => 'https://via.placeholder.com/150?text=Lenovo+ThinkPad'
    ]
];


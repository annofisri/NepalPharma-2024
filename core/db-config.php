<?php

// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'nepal_pharma_expo_2024');
define('DB_HOST', 'sdb-52.hosting.stackcp.net');
define('DB_USER', 'pharma_expo_2024-353030342b2d');
define('DB_PASS', 'laidbn6c3m');
define('DB_NAME', 'pharma_expo_2024-353030342b2d');

define('ROOT_PATH', __DIR__ . '/..');
define('MAX_UPLOAD_IMAGE_SIZE', 1024 * 1024 * 20);


define('ALLOWED_IMAGE_TYPES', [
    'jpeg',
    'png',
    'jpg',
]);

define('STALL_TYPES', [
    'platinum' => [
        'name' => 'Platinum Sponsor',
        'price' => '1600000',
        'color' => '#8DC63F',
        'size' => '6 x 15',
        'quantity' => '(1 no)',
    ],
    'diamond' => [
        'name' => 'Diamond Sponsor',
        'price' => 1300000,
        'color' => '#B3B0D9',
        'size' => '6 x 10',
        'quantity' => '(2 no)',

    ],
    'gold' => [
        'name' => 'Gold Sponsor',
        'price' => '1000000',
        'color' => '#4ABFD9',
        'size' => '6 x 7.5',
        'quantity' => '(4 no)',
    ],
    'silver' => [
        'name' => 'Silver Sponsor',
        'price' => '650000',
        'color' => '#F391BC',
        'size' => '6 x 5',
        'quantity' => '(2 no)',
    ],
    'international_exhibitor' => [
        'name' => 'International Exhibitor',
        'price' => '200000',
        'color' => '#E5D44C',
        'size' => '6 x 3',
        'quantity' => '6 x 3',
    ],

    'vendor_registered' => [
        'name' => 'International Exhibitor',
        'price' => '100000',
        'color' => '#C3C4C6',
        'size' => '3 x 3',
        'quantity' => '3 x 3',
    ],

]);

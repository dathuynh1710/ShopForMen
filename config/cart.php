<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tax Configuration
    |--------------------------------------------------------------------------
    |
    | The tax percentage that will be applied to the cart.
    |
    */
    'tax' => 10, // Thuế 10%

    /*
    |--------------------------------------------------------------------------
    | Formatting Configuration
    |--------------------------------------------------------------------------
    |
    | The default formatting settings for displaying numbers.
    |
    */
    'format' => [
        'decimals' => 0,              // Không hiển thị số thập phân
        'decimal_point' => ',',       // Dùng dấu phẩy làm dấu thập phân
        'thousand_separator' => '.', // Dùng dấu chấm làm phân cách hàng nghìn
    ],

    /*
    |--------------------------------------------------------------------------
    | Shipping Fee Configuration
    |--------------------------------------------------------------------------
    |
    | The fixed shipping fee applied to the cart.
    |
    */
    'shipping_fee' => 25000, // Phí vận chuyển cố định: 25,000 VND


];

<?php

namespace App\Model;

use Engine\Model\Rest;

class Store
{
    public static Rest $cart;

    static function get_cart()
    {
        (new Store)->__construct();
        return self::$cart->get("cart");
    }

    public function __construct()
    {
        self::$cart = new Rest("planete-green.fr/wp-json/wc/store", "v1");
    }

}
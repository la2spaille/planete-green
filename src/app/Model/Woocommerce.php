<?php

namespace App\Model;

use Engine\Model\Client;

class Woocommerce
{

    public static Client $woocommerce;

    public  function __construct()
    {
        self::$woocommerce = new Client(
            'https://planete-green.fr',
            'ck_4d80816aae5ec028624f5e2dd2ad0072af638e60',
            'cs_ff55b99ee0bc67ee85b97e9a52a8e58cecbb24e5',
            [
                'version' => 'wc/v3',
            ]
        );
    }

    public static function get_products()
    {
        (new Woocommerce)->__construct();
         return self::$woocommerce->get('products?per_page=12&status=publish');
    }
    public static function get_product($slug) {
        return self::$woocommerce->get("products?slug=$slug&status=publish");
    }
    public static function  test() {
        return self::$woocommerce->get("cart");

    }

    public static function get_related_products($ids= []) {
        return self::$woocommerce->get("products?per_page=4&status=publish&include=$ids[0],$ids[1],$ids[2],$ids[3]");

}
    public static function  get_categories() {
        return self::$woocommerce->get('products/categories?per_page=10&?hide_empty=true');
    }
}
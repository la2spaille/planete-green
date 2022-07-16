<?php

namespace App\Model;

use Engine\Model\Rest;

class Wordpress
{
    private Rest $wordpress;
    private Rest $index;

    public function __construct()
    {
        $this->wordpress = new Rest("planete-green.fr/wp-json/wp", "v2");
        $this->index = new Rest("planete-green.fr/wp-json", "");

    }


    public function get_info()
    {
        $info = $this->index->get();
        $logo = $this->get_media($info['site_logo']);
        return [
            "name" => $info['name'],
            "description" => $info['description'],
            "logo_url" => $logo['source_url'],
            "menu" => [
                0 => [
                    "name" => "Boutique",
                    "slug" =>"boutique",
                    "children" => [
                        0 => [
                            "name" => "Fleurs",
                            "slug" => "categorie-produit/fleurs",
                        ],
                        1 => [
                            "name" => "CBD solide",
                            "slug" => "categorie-produit/cbd-solide",
                        ],
                        2 => [
                            "name" => "Huiles",
                            "slug" => "categorie-produit/huiles",
                        ],
                        3 => [
                            "name" => "Vapens et E-liquide",
                            "slug" => "categorie-produit/vapens-et-e-liquides",
                        ],
                        4 => [
                            "name" => "Infusion",
                            "slug" => "categorie-produit/infusions",
                        ],
                        5 => [
                            "name" => "Alimentaire",
                            "slug" => "categorie-produit/alimentaire",
                        ],
                        6 => [
                            "name" => "Compléments alimentaire",
                            "slug" => "categorie-produit/complement-alimentaire",
                        ],
                        7 => [
                            "name" => "Béauté et Bien-être",
                            "slug" => "categorie-produit/beaute-et-bien-etre",
                        ],
                        1 => [
                            "name" => "Accessoire",
                            "slug" => "categorie-produit/accessoire",
                        ],

                    ]

                ],
                1 => [
                    "name" => "Qu-est-ce que le cbd ?",
                    "slug" => "quest-que-le-cdb",
                ],
                2 => [
                    "name" => "Qui sommes nous ?",
                    "slug" => "qui-somme-nous",
                ],
                3 => [
                    "name" => "Où nous trouver ?",
                    "slug" => "contact",
                ]
            ]
        ];
    }

    public function get_media($id = "")
    {
        return $this->wordpress->get("media" . "/" . $id);
    }
}
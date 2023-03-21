<?php
acf_register_block_type([
    "name" => "cta",
    "title" => __("Cta", "theme-domain"),
    "description" => __(
        "Dodaj blok call to action z możliwością edycji tekstu, koloru tła, labelami przycisków oraz url przycisków",
        "theme-domain"
    ),
    "render_template" => dirname(__FILE__) . "/block.php",
    "category" => "widgets",
    "icon" => "controls-volumeon",
    "keywords" => ["Cta", "call", "to", "action"],
    "mode" => "edit",
    "example" => [
        "attributes" => [
            "mode" => "preview",
            "data" => [
                "preview_image_help" =>
                    get_template_directory_uri() .
                    "/includes/blocks/cta/cta.png",
            ],
        ],
    ],
]);

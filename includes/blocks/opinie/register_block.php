<?php
acf_register_block_type([
    "name" => "opinie",
    "title" => __("Opinie", "theme-domain"),
    "description" => __("Dodaj blok ze sliderem z opiniami", "theme-domain"),
    "render_template" => dirname(__FILE__) . "/block.php",
    "category" => "widgets",
    "icon" => "testimonial",
    "keywords" => ["Opinie"],
    "mode" => "edit",
    "example" => [
        "attributes" => [
            "mode" => "preview",
            "data" => [
                "preview_image_help" =>
                    get_template_directory_uri() .
                    "/includes/blocks/opinie/opinie.png",
            ],
        ],
    ],
]);

<?php
acf_register_block_type([
    "name" => "siatka-linkow",
    "title" => __("Siatka Linków", "theme-domain"),
    "description" => __(
        "Wyświetla sześcio elementową siatkę linków z obrazkowym tłem. W wersji mobile zmienia się w slider.",
        "theme-domain"
    ),
    "render_template" => dirname(__FILE__) . "/block.php",
    "category" => "widgets",
    "icon" => "grid-view",
    "keywords" => ["Siatka", "linków"],
    "mode" => "edit",
    "example" => [
        "attributes" => [
            "mode" => "preview",
            "data" => [
                "preview_image_help" =>
                    get_template_directory_uri() .
                    "/includes/blocks/siatka-linkow/siatka-linkow.png",
            ],
        ],
    ],
]);

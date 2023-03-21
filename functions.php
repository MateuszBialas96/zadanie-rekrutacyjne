<?php
require get_template_directory() . "/includes/enqueue.php";
if (class_exists("acf_pro")) {
    require get_template_directory() . "/includes/acf_register_block.php";
}

add_theme_support("menus");

register_nav_menus([
    "header_menu" => __("Header Menu"),
    "footer_menu" => __("Footer Menu"),
]);

//Menu indicator for dropdown

function theme_name_add_menu_parent_class($items)
{
    $parents = [];
    foreach ($items as $item) {
        if ($item->menu_item_parent && $item->menu_item_parent > 0) {
            $parents[] = $item->menu_item_parent;
        }
    }

    foreach ($items as $item) {
        if (in_array($item->ID, $parents)) {
            $item->classes[] = "has-children";
        }
    }

    return $items;
}
add_filter("wp_nav_menu_objects", "theme_name_add_menu_parent_class");

//Add option page

add_action("acf/init", "my_acf_op_init");
function my_acf_op_init()
{
    if (function_exists("acf_add_options_page")) {
        acf_add_options_page([
            "page_title" => "Ustawienia motywu",
            "menu_title" => "Ustawienia motywu",
            "menu_slug" => "theme-general-settings",
            "capability" => "edit_posts",
            "redirect" => false,
        ]);

        acf_add_options_sub_page([
            "page_title" => "Ustawienia nagłówka",
            "menu_title" => "Nagłówek",
            "parent_slug" => "theme-general-settings",
        ]);

        acf_add_options_sub_page([
            "page_title" => "Ustawienia stopki",
            "menu_title" => "Stopka",
            "parent_slug" => "theme-general-settings",
        ]);
    }
}

//Allow svg

function cc_mime_types($mimes)
{
    $mimes["svg"] = "image/svg+xml";
    return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");

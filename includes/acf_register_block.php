<?php
add_action("acf/init", "acf_blocks_init");
function acf_blocks_init()
{
    if (function_exists("acf_register_block_type")) {
        require get_template_directory() .
            "/includes/blocks/block-standard-text/register_block.php";
        require get_template_directory() .
            "/includes/blocks/cta/register_block.php";
        require get_template_directory() .
            "/includes/blocks/siatka-linkow/register_block.php";
        require get_template_directory() .
            "/includes/blocks/opinie/register_block.php";
    }
}

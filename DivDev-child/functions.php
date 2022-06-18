<?php


function divdev_child_assets()
{
    wp_enqueue_style("parent-style-css", get_parent_theme_file_uri("/style.css"));
}

add_action("wp_enqueue_scripts", "divdev_child_assets");

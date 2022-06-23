<?php
function hash_bootstrapping() {
    load_default_textdomain("Hash");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
}

add_action("after_setup_theme", "hash_bootstrapping");

function hash_assets() {
    wp_enqueue_script("bootstrapjs", "/assets/fontawesome/js/all.min.js");
    wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic");
    wp_enqueue_style("bootstrapcss", "/assets/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style("rawcss", get_stylesheet_uri());
    wp_enqueue_media("profile-img", "/assets/images/profile.png");
}

add_action("wp_enqueue_scripts", "hash_assets");
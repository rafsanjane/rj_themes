<?php

require_once(get_theme_file_path("inc/tgm.php"));
require_once(get_theme_file_path("inc/attachments.php"));

/*
*
*  After Theme Setup
*
*/

function virtualwriter_theme_setup()
{
    load_theme_textdomain('virtualwriter');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'comment-list',));
    add_theme_support('custom-logo', array(
        'height' => 480,
        'width'  => 720,
    ));
    add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video', 'link', 'audio'));
    add_editor_style('/assets/css/custom-editor-style.css');

    register_nav_menu("topmenu", __('Top Menu', 'virtualwriter'));
    add_image_size("virtualwriter-home-square", 400, 400, true);
}


add_action("after_setup_theme", "virtualwriter_theme_setup");


/*
*
*  enqueue assets - Style | JS | jQuery | CDN
*
*/

if (site_url() == "http://localhost/wp_dev") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}


function virtualwriter_assets()
{
    /* CSS included */
    wp_enqueue_style("fontawesome-css", get_theme_file_uri("/assets/css/font-awesome/css/font-awesome.css"), null, "1.0");
    wp_enqueue_style("fonts-css", get_theme_file_uri("/assets/css/fonts.css"), null, "1.0");
    wp_enqueue_style("base-css", get_theme_file_uri("/assets/css/base.css"), null, "1.0");
    wp_enqueue_style("vendor-css", get_theme_file_uri("/assets/css/vendor.css"), null, "1.0");
    wp_enqueue_style("main-css", get_theme_file_uri("/assets/css/main.css"), null, "1.0");
    wp_enqueue_style("style-css", get_stylesheet_uri(), null, VERSION);

    /* JS included */
    wp_enqueue_script("modernizr-js", get_theme_file_uri("/assets/js/modernizr.js"), null, "1.0");
    wp_enqueue_script("pace-min-js", get_theme_file_uri("/assets/js/pace.min.js"), null, "1.0");

    /* Footer JS included */
    wp_enqueue_script("plugins-js", get_theme_file_uri("/assets/js/plugins.js"), ["jquery"], "1.0", true);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), ["jquery"], "1.0", true);
}


add_action("wp_enqueue_scripts", "virtualwriter_assets");


function the_virtualwriter_pagination()
{
    global $wp_query;
    $links =  paginate_links(array(
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list'
    ));
    if (have_posts() >= 10) {
        $links = str_replace('page-numbers', 'pgn__num', $links);
        $links = str_replace("<ul class='pgn__num'>", '<ul>', $links);
        $links = str_replace('next pgn__num', 'pgn__next', $links);
        $links = str_replace('prev pgn__num', 'pgn__prev', $links);
        echo $links;
    }
}

remove_action("term_description", "wpautop");

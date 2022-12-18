<?php

require_once(get_theme_file_path("inc/tgm.php"));
require_once(get_theme_file_path("inc/attachments.php"));
require_once(get_theme_file_path("widgets/social-icons-widget.php"));

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
    register_nav_menus(array(
        "footer_left" => __("Footer Left Menu", "virtualwriter"),
        "footer_middle" => __("Footer Middle Menu", "virtualwriter"),
        "footer_right" => __("Footer Right Menu", "virtualwriter")
    ));
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
    function get_page_templates($post = null, $post_type = 'page')
    {
        return array_flip(wp_get_theme()->get_page_templates($post, $post_type));
    }

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

function virtualwriter_widgets()
{
    register_sidebar(array(
        'name'          => __('About Us Page', 'virtualwriter'),
        'id'            => 'about-us',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'virtualwriter'),
        'before_widget' => '<div id="%1$s" class="col-block %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="quarter-top-margin">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Contact Us Page Map Section', 'virtualwriter'),
        'id'            => 'contact-maps',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'virtualwriter'),
        'before_widget' => '<div id="%1$s" class=" %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
    register_sidebar(array(
        'name'          => __('Contact Us Page Information Section', 'virtualwriter'),
        'id'            => 'contact-info',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'virtualwriter'),
        'before_widget' => '<div id="%1$s" class="col-block %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="quarter-top-margin">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Before Footer Section', 'virtualwriter'),
        'id'            => 'before-footer-right',
        'description'   => __('Before Footer Section, Right Side.', 'virtualwriter'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Section', 'virtualwriter'),
        'id'            => 'footer-right',
        'description'   => __('Footer Section, Right Side.', 'virtualwriter'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Bottom', 'virtualwriter'),
        'id'            => 'footer-bottom',
        'description'   => __('Footer Bottom Section.', 'virtualwriter'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}


add_action("widgets_init", "virtualwriter_widgets");

function virtualwriter_search_form($form)
{
    $homedir = home_url("/");
    $label = __('Search for:', 'virtualwriter');
    $input_label = __('Search', 'virtualwriter');
    $placeholder = __('Type Keywords', 'virtualwriter');
    $new_form = <<<FORM
<form role="search" method="get" class="header__search-form" action="{$homedir}">
    <label>
        <span class="hide-content">{$label}</span>
        <input type="search" class="search-field" placeholder="{$placeholder}" value="" name="s" title="Search for:" autocomplete="off">
    </label>
    <input type="submit" class="search-submit" value="{$input_label}">
</form>
FORM;
    return $new_form;
}

add_filter('get_search_form', "virtualwriter_search_form");

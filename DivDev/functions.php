<?php

require_once get_theme_file_path('/lib/class-tgm-plugin-activation.php');

if (class_exists('Attachments')) {
    require_once "lib/attachments.php";
}




// Essential future adding

if (site_url() == "http://localhost/wp_dev") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}

function divdev_bootstrapping()
{
    load_default_textdomain('divdev');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form'));
    $divdev_custom_header_details = array(
        'header-text'        => true,
        'default-text-color' => '#222',
    );

    add_theme_support('custom-header', $divdev_custom_header_details);
    add_theme_support('custom-text');
    add_theme_support('custom-background');

    $divdev_custom_logo_defaults = array(
        'width'                => '100',
        'height'               => '100',
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $divdev_custom_logo_defaults);

    add_theme_support("post-formats", array("image", "quote", "video", "audio", "link"));

    add_image_size('divdev-square', 400, 400, true);
    add_image_size('divdev-portrait', 400, 9999);
    add_image_size('divdev-landscape', 9999, 400);
    add_image_size('divdev-landscape-hard-cropped', 600, 400);
}
add_action('after_setup_theme', 'divdev_bootstrapping');

// design assets file connecting

function divdev_assets()
{

    // if (is_page()) {

    // $divdev_template_unique_enqueue = basename(get_page_template());

    // if ($divdev_template_unique_enqueue == "blog.php") {

    //     wp_enqueue_style('blog-grid-other', get_template_directory_uri() . '/assets/bigcss/theme-1.css');

    //     wp_enqueue_script('bootstraps-min-js', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js');

    // } else {

    wp_enqueue_style('cloudflare-css', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/styles/monokai-sublime.min.css');
    wp_enqueue_style('featherLight-css', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
    wp_register_style('style-sheet', get_stylesheet_uri(), null, VERSION);

    wp_enqueue_style("dashicons");
    wp_enqueue_style("tns-slider-css", get_template_directory_uri() . "/assets/plugins/tiny-slider/tiny-slider.css");

    wp_enqueue_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.14.2/highlight.min.js');
    wp_enqueue_script('tns-js', get_template_directory_uri() . '/assets/plugins/tiny-slider/min/tiny-slider.js"', null, VERSION, true);
    wp_enqueue_script('featherLight-js', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', ['jquery'], VERSION, true);
    wp_enqueue_script('main-js',  get_template_directory_uri() . '/assets/js/main.js', null, VERSION, true);

    wp_register_script('bootstrap-min-js', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', ['jquery'], VERSION, true);
    wp_register_script('all-min-js', get_template_directory_uri() . '/assets/fontawesome/js/all.min.js');
    wp_register_script('popper-js', get_template_directory_uri() . '/assets/plugins/popper.min.js');

    wp_enqueue_style('style-sheet');
    wp_enqueue_script('bootstrap-min-js');
    wp_enqueue_script('all-min-js');
    wp_enqueue_script('popper-js');
    //     }
    // }

}

add_action('wp_enqueue_scripts', 'divdev_assets');

/*
 *    Wp header template
 */

function divdev_all_header_template()
{
    if (is_front_page()) {
        if (current_theme_supports("custom-header")) {
?>
            <style>
                .cta-section {
                    background-image: url(<?php echo header_image(); ?>) !important;
                    background-size: cover !important;
                }

                .cta-section h2 {
                    color: #<?php echo get_header_textcolor(); ?>;
                    <?php
                    if (display_header_text()) {
                        echo "display:none;";
                    }
                    ?>
                }
            </style>
<?php

        }
    }
}

add_action("wp_head", "divdev_all_header_template");

/*
 *Crops an image to a given size
 */

function my_custom_sizes($sizes)
{
    return array_merge($sizes, array(
        'your-custom-size' => __('Your Custom Size Name'),
    ));
}
add_filter('image_size_names_choose', 'my_custom_sizes');

/*
 * Sidebar functions
 */

function divdev_sidebar()
{
    register_sidebar(
        array(
            'name'          => __('Single Post Sidebar', 'divdev'),
            'id'            => 'sidebar-1',
            'description'   => __('Right Sidebar.', 'divdev'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => __('Footer Left', 'divdev'),
            'id'            => 'footer-left',
            'description'   => __('Widget Footer Left.', 'divdev'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'name'          => __('Footer Right', 'divdev'),
            'id'            => 'footer-right',
            'description'   => __('Widget Footer Right.', 'divdev'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}

add_action("widgets_init", "divdev_sidebar");

function divdev_the_excerpt($excerpt)
{
    if (!post_password_required()) {
        return $excerpt;
    } else {
        echo get_the_password_form();
    }
}

add_filter("the_excerpt", "divdev_the_excerpt");

function divdev_protected_title_remove()
{
    return "%s";
}

add_filter("protected_title_format", "divdev_protected_title_remove");

function divdev_register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu'  => __('Secondary Menu'),
        )
    );
}
add_action('init', 'divdev_register_my_menus');

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';

    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_css_class($classes, $item, $args)
{
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_css_class', 1, 3);


function divdev_highlight_search_words($text)
{
    if (is_search()) {

        $query_trim = trim(get_search_query(), " \n\r\t\v\x00");

        $pattern = '/(' . join('|', explode(' ', $query_trim)) . ')/i';
        $text = preg_replace($pattern, '<span class="search-heighlight">\0</span>', $text);
    }
    return $text;
}

add_filter('the_content', 'divdev_highlight_search_words');
add_filter('the_excerpt', 'divdev_highlight_search_words');
add_filter('the_title', 'divdev_highlight_search_words');
















// function add_css_pagination()
// {
//
//     <!-- <style type="text/css">
//         span.page-numbers.current {
//             background: #a8307c;
//             color: white;
//         }

//         button.btn a {
//             color: #f4f4f4;
//             text-decoration: none;
//         }

//         button.btn.btn-outline-info a {
//             color: darkslategrey;
//             font-weight: 600;
//         }

//         button.btn.btn-outline-info {
//             background: unset;
//             border: 1px solid turquoise;
//             color: darkslategrey;
//             font-weight: 600;
//         }
//     </style> -->

//
// }
// add_action('wp_head', 'add_css_pagination');

// require('inc/wp-pagination.php');


/**
 * Register the Product post type with a Dashicon.
 *
 * @see register_post_type()
 */

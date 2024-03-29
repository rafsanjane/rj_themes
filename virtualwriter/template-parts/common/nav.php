<a class="header__toggle-menu" href="#0" title="Menu">
    <span>
        <?php _e("Menu", "virtualwriter")  ?>

    </span>
</a>

<nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6">
        <?php _e("Site Navigation", "virtualwriter")  ?>
    </h2>


    <?php

    $virtualwriter_menu =  wp_nav_menu(array(

        'theme_location' => "topmenu",
        'menu_id' => "topmenu",
        'menu_class' => "header__nav",
        'echo' => false
    ));

    $virtualwriter_menu = str_replace('menu-item-has-children', 'has-children', $virtualwriter_menu);
    echo $virtualwriter_menu;


    ?>

    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">
        <?php _e("Close", "virtualwriter")  ?>
    </a>

</nav> <!-- end header__nav-wrap -->
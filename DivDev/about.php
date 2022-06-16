<?php

/*
 * Template Name: About Page Template
 */

get_header(); ?>

<?php get_template_part("left-sidebar"); ?>


<div class="main-wrapper">
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <section class="cta-section theme-bg-light py-5">
        <div class="container text-center single-col-max-width">
            <h2 class="heading"><?php bloginfo("title") ?></h2>
            <h4 class="intro"><?php bloginfo("description") ?></h4>

            <!--//single-form-max-width-->
            <h3 class="title mb-1">
                <a class="text-link" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>

                </a>
            </h3>
        </div>
        <!--//container-->
    </section>



    <!------Post Start From here----->

    <?php
    get_template_part("/page-templates/team");
    ?>
    <hr>
    <?php
    get_template_part("/page-templates/testimonial");
    ?>

    <!--//about-section-->





    <!-- News Later section -->
    <?php
    get_template_part("/page-templates/newslater");
    ?>




    <?php get_footer(); ?>
<?php

/*
 * Template Name: WordPress Query
 */
?>



<?php get_header(); ?>

<?php get_template_part("left-sidebar"); ?>


<div class="main-wrapper">
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <section class="cta-section headerimage theme-bg-light py-5">
        <div class="container text-center single-col-max-width">


            <h2 class="heading"><?php bloginfo("title") ?></h2>
            <div class="single-form-max-width pt-3 mx-auto">
                <h5>
                    <span class="tag-css"><?php the_title() ?></span>
                </h5>

                <!--//signup-form-->
            </div>
            <!--//single-form-max-width-->
        </div>
        <!--//container-->
    </section>

    <section class="blog-list px-3 py-5 p-md-5">

        <div class="container single-col-max-width">
            <?php
            $paged = get_query_var("paged") ? get_query_var("paged") : 1;
            $post_ids = array(390,  392, 396, 345, 346, 121, 122, 123, 124, 125);
            $total = 9;
            $posts_per_page = 3;
            $_P =  new WP_Query(array(
                'posts_per_page' => $posts_per_page,
                // 'post__in' => $post_ids,
                'author__in' => array(1, 4),
                'post__in' => $post_ids,
                'numberposts' => $total,
                'orderby' => 'post__in',
                'paged' => $paged

            ));
            foreach ($_P as $post) {
                setup_postdata($post);

            ?>




                <div <?php post_class(); ?>>
                    <div class="item mb-5">
                        <div class="row g-3 g-xl-0">
                            <div class="col-2 col-xl-3">
                                <a class="text-link" href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                                    } else {
                                        echo '<img class="img-fluid post-thumb" src="' . get_theme_file_uri("/assets/images/blog/Cock-" . rand(1, 10) . ".jpg") . '" alt="image">';
                                    }
                                    ?>
                                </a>
                            </div>
                            <div class="col">
                                <h3 class="title mb-1">
                                    <a class="text-link" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <div class="meta mb-1">
                                    <span class="author">
                                        <?php echo get_the_author_link(); ?>
                                    </span>
                                    <span class="date">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                    <?php
                                    if (is_tag()) {
                                    ?>
                                        <span class="tag">
                                            <?php the_tags(); ?>
                                        </span>
                                    <?php
                                    }
                                    ?>
                                    <span class="comment">
                                        <a class="text-link" href="#comment-sections">
                                            <?php

                                            if (get_comments_number() >= 2) {
                                                echo get_comments_number() . " comments";
                                            } else {
                                                echo get_comments_number() . " comment";
                                            }
                                            ?>
                                        </a>
                                    </span>
                                </div>
                                <div class="intro">
                                    <?php
                                    the_excerpt();

                                    ?>
                                </div>
                                <!-- <a class="text-link" href="blog-post.html">Read more &rarr;</a> -->
                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                </div>


            <?php
            }
            wp_reset_postdata();

            ?>


            <div class="container">
                <div class="row">
                    <div class="col-md-12 blog-nav pagination-link">
                        <div class="nav-item nav-link rounded">
                            <?php
                            echo paginate_links(array(
                                'total' => $_p->max_num_pages,
                                'current' => $paged


                            ));
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!------Post Start From here----->



    <?php get_footer(); ?>
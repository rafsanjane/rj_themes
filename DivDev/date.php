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
                <h4>
                    Post In
                    <span class="archive-date">
                        <?php
                        if (is_month()) {
                            $month = get_query_var("monthnum");
                            $date_obj = DateTime::createFromFormat("!m", $month);
                            echo $date_obj->format("F");
                        } else if (is_year()) {
                            echo esc_html(get_query_var("year"));
                        } else if (is_day()) {
                            $divdev_day = esc_html(get_query_var("day"));
                            $divdev_month = esc_html(get_query_var("monthnum"));
                            $divdev_year = esc_html(get_query_var("year"));

                            printf("%s/%s/%s", $divdev_day, $divdev_month, $divdev_year);
                        }
                        ?>
                    </span>
                </h4>

                <!--//signup-form-->
            </div>
            <!--//single-form-max-width-->
        </div>
        <!--//container-->
    </section>

    <section class="blog-list px-3 py-5 p-md-5">

        <div class="container single-col-max-width">
            <?php
            while (have_posts()) {
                the_post();
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


            <?php }  ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 blog-nav pagination-link">
                        <div class="nav-item nav-link rounded">
                            <?php the_posts_pagination(array(
                                'screen_reader_text' => '',
                                'mid_size'           => 2,
                                'prev_text'          => 'New Post',
                                'next_text'          => 'Previous Post',

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
<?php

/*
 * Template Name: Blog Grid Template
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
        <div class="container text-center">
            <h2 class="heading"><?php bloginfo("title") ?></h2>
            <div class="intro"><?php bloginfo("description") ?></div>
            <div class="single-form-max-width pt-3 mx-auto">
                <form class="signup-form row g-2 g-lg-2 align-items-center">
                    <div class="col-12 col-md-9">
                        <label class="sr-only" for="semail">Your email</label>
                        <input type="email" id="semail" name="semail1" class="form-control me-md-1 semail" placeholder="Enter email">
                    </div>
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
                <!--//signup-form-->
            </div>
            <!--//single-form-max-width-->
        </div>
        <!--//container-->
    </section>


    <section class="blog-list px-3 py-5 p-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3" <?php post_class(); ?>>
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>

                        <div class="card blog-post-card">
                            <?php
                            $divdev_post_formate = get_post_format();
                            if ($divdev_post_formate == "audio") {
                                echo '<span class="dashicons dashicons-format-audio"></span>';
                            } elseif ($divdev_post_formate == "video") {
                                echo '<span class="dashicons dashicons-format-video"></span>';
                            } elseif ($divdev_post_formate == "image") {
                                echo '<span class="dashicons dashicons-format-image"></span>';
                            } elseif ($divdev_post_formate == "quote") {
                                echo '<span class="dashicons dashicons-format-quote"></span>';
                            } elseif ($divdev_post_formate == "link") {
                                echo '<span class="dashicons dashicons-admin-links"></span>';
                            } elseif ($divdev_post_formate == "chat") {
                                echo '<span class="dashicons dashicons-format-chat"></span>';
                            }
                            ?>
                            <a class="text-link" href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail("thumbnail");
                                } else {
                                    echo '<img class="img-fluid post-thumb " src="assets/images/blog/blog-post-thumb-1.jpg" alt="image">';
                                }
                                ?>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-link" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <p class="mb-0"><a class="text-link" href="blog-post.php">Read more &rarr;</a></p>

                            </div>
                            <div class="card-footer meta mb-1">
                                <span class="author">
                                    <?php echo get_the_author_link(); ?>
                                </span>
                                <span class="date">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span class="tag">
                                    <?php the_tags(); ?>
                                </span>
                                <span class="comment">
                                    <a class="text-link" href="#comment-sections">
                                        <?php echo get_comments_number() . " comments"; ?>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <!--//card-->
                    <?php
                    }
                    ?>
                </div>
                <!--//col-->
            </div>
            <!--//row-->


            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded" href="#">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>

        </div>
    </section>

    <?php get_footer() ?>
<?php
the_post();
get_header();
?>
</section>
<!-- s-content
    ================================================== -->
<section class="s-content s-content--narrow s-content--no-padding-bottom">

    <article class="row format-standard">

        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                <?php the_title();  ?>

            </h1>
            <ul class="s-content__header-meta">
                <li class="date"> <?php the_date();  ?></li>
                <li class="cat">
                    In
                    <?php the_category(" ");  ?>
                </li>
            </ul>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb text-center">
                <?php
                the_post_thumbnail("large");
                ?>

            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            <?php
            the_content();
            ?>

            <p class="s-content__tags">
                <span>Post Tags</span>

                <span class="s-content__tag-list">
                    <?php echo get_the_tag_list();  ?>

                </span>
            </p> <!-- end s-content__tags -->

            <div class="s-content__author">
                <?php
                echo get_avatar(get_the_author_meta("ID"));
                ?>


                <div class="s-content__author-about">
                    <h4 class="s-content__author-name">


                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>"><?php the_author();  ?>
                        </a>
                    </h4>

                    <?php the_author_meta('description');  ?>


                    <ul class="s-content__author-social">
                        <?php
                        $virtualwriter_author_fb = get_field("facebook", "user_" . get_the_author_meta("ID"));
                        $virtualwriter_author_tw = get_field("twitter", "user_" . get_the_author_meta("ID"));
                        $virtualwriter_author_ig = get_field("instagram", "user_" . get_the_author_meta("ID"));
                        $virtualwriter_author_li = get_field("linkedin", "user_" . get_the_author_meta("ID"));
                        $virtualwriter_author_gt = get_field("github", "user_" . get_the_author_meta("ID"));
                        ?>

                        <?php
                        if ($virtualwriter_author_fb) :
                        ?>
                            <li><a href="<?php echo esc_url($virtualwriter_author_fb) ?>">Facebook</a></li>
                        <?php endif;  ?>
                        <?php
                        if ($virtualwriter_author_tw) :
                        ?>
                            <li><a href="<?php echo esc_url($virtualwriter_author_tw) ?>">Twitter</a></li>
                        <?php endif;  ?>
                        <?php
                        if ($virtualwriter_author_ig) :
                        ?>
                            <li><a href="<?php echo esc_url($virtualwriter_author_ig) ?>">Instagram</a></li>
                        <?php endif;  ?>
                        <?php
                        if ($virtualwriter_author_li) :
                        ?>
                            <li><a href="<?php echo esc_url($virtualwriter_author_li) ?>">LinkedIn</a></li>
                        <?php endif;  ?>
                        <?php
                        if ($virtualwriter_author_gt) :
                        ?>
                            <li><a href="<?php echo esc_url($virtualwriter_author_gt) ?>">GitHUb</a></li>
                        <?php endif;  ?>
                    </ul>
                </div>
            </div>

            <div class="s-content__pagenav">
                <div class="s-content__nav">
                    <div class="s-content__prev">
                        <?php
                        $virtualwriter_prev_post =  get_previous_post();
                        if ($virtualwriter_prev_post) :
                        ?>
                            <a href="<?php echo esc_url(get_the_permalink($virtualwriter_prev_post)); ?>" rel="prev">
                                <span><?php _e("Previous Post", "virtualwriter")  ?></span>
                                <?php echo get_the_title($virtualwriter_prev_post);  ?>
                            </a>
                        <?php endif;  ?>
                    </div>
                    <div class="s-content__next">
                        <?php
                        $virtualwriter_next_post =  get_next_post();
                        if ($virtualwriter_next_post) :
                        ?>
                            <a href="<?php echo esc_url(get_the_permalink($virtualwriter_next_post)); ?>" rel="next">
                                <span><?php _e("Next Post", "virtualwriter")  ?>
                                </span>
                                <?php echo get_the_title($virtualwriter_next_post);  ?>
                            </a>
                        <?php endif;  ?>
                    </div>
                </div>
            </div> <!-- end s-content__pagenav -->

        </div> <!-- end s-content__main -->

    </article>


    <!-- comments
        ================================================== -->
    <?php
    if (!post_password_required()) {
        comments_template();
    }
    ?>

    <!-- end comments-wrap -->

</section> <!-- s-content -->


<?php get_footer(); ?>
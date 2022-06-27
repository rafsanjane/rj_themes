<div <?php post_class(); ?>>
    <div class="item mb-5">
        <div class="row g-3 g-xl-0">
            <div class="col-2 col-xl-3">
                <a class="text-link" href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
                    } else {
                        echo '<img class="img-fluid post-thumb" src="' . get_theme_file_uri("/assets/images/blog/chicken-" . rand(1, 10) . ".jpg") . '" alt="image">';
                    }
                    ?>
                </a>
            </div>
            <div class="col text-left">
                <h3 class="title mb-1">
                    <a class="text-link" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="meta mb-1">
                    <span class="author">
                        <?php the_author_posts_link(); ?>
                    </span>
                    <span class="date">
                        <a href="<?php the_date("Y/m/d"); ?>"><?php echo get_the_date(); ?></a>
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
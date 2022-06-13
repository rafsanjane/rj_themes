<div <?php post_class(); ?>>
    <div class="item mb-5">
        <div class="row g-3 g-xl-0">
            <div class="col-2 col-xl-3">
                <a class="text-link" href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail("thumbnail");
                    } else {
                        echo '<img class="img-fluid post-thumb " src="assets/images/blog/blog-post-thumb-1.jpg" alt="image">';
                    }
                    ?>
                </a>
                <span class="dashicons dashicons-format-video"></span>
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
                    <span class="tag">
                        <?php the_tags(); ?>
                    </span>
                    <span class="comment">
                        <a class="text-link" href="#comment-sections">

                            <?php echo get_comments_number() . " comments"; ?>
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
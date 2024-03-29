<?php get_header();  ?>


<!-- s-content
    ================================================== -->
<section class="s-content">
    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1>
                <?php single_cat_title(); ?>
            </h1>

            <p class="lead">
                <?php echo category_description();  ?>
            </p>
        </div>
    </div>

    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>
            <?php
            if (!have_posts()) {
            ?>
                <p class="text-center h3">
                    <?php _e("There is no Post Yet", "virtualwriter");  ?>
                </p>
            <?php
            } else {
                while (have_posts()) {
                    the_post();
                    get_template_part("template-parts/post-formats/post", get_post_format());
                }
            }

            ?>


        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->

    <div class="row">
        <div class="col-full">
            <nav class="pgn">
                <?php
                the_virtualwriter_pagination();
                ?>
            </nav>
        </div>
    </div>

</section> <!-- s-content -->


<!-- Footer -->

<?php get_footer();  ?>
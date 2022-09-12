<article class="masonry__brick entry format-standard" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="<?php echo get_permalink(); ?>" class="entry__thumb-link">
            <?php echo the_post_thumbnail('virtualwriter-home-square');  ?>
        </a>
    </div>

    <?php get_template_part("template-parts/common/post/summary"); ?>

</article> <!-- end article -->
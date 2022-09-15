<?php
$virtualwriter_video_file = "";
if (function_exists("the_field")) {
    $virtualwriter_video_file = get_field("source_file");
}
?>


<article class="masonry__brick entry format-video" data-aos="fade-up">
    <?php   ?>

    <div class="entry__thumb video-image">
        <a href="<?php echo esc_url($virtualwriter_video_file); ?>?color=01aef0&title=0&byline=0&portrait=0" data-lity>
            <?php echo the_post_thumbnail('virtualwriter-home-square');  ?>
        </a>
    </div>

    <?php get_template_part("template-parts/common/post/summary"); ?>

</article> <!-- end article -->
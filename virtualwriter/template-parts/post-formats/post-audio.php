<?php
$virtualwriter_audio_file = "";
if (function_exists("the_field")) {
    $virtualwriter_audio_file = get_field("source_file");
}
?>

<article class="masonry__brick entry format-audio" data-aos="fade-up">

    <div class="entry__thumb">
        <a href="single-audio.html" class="entry__thumb-link">
            <?php echo the_post_thumbnail('virtualwriter-home-square');  ?>
        </a>
        <?php
        if ($virtualwriter_audio_file) :
        ?>

            <div class="audio-wrap">
                <audio id="player" src="<?php echo esc_url($virtualwriter_audio_file);  ?>" width="100%" height="42" controls="controls"></audio>
            </div>
        <?php endif;  ?>

    </div>

    <?php get_template_part("template-parts/common/post/summary"); ?>

</article> <!-- end article -->
<article class="testimonial-section py-5">
    <div class="container">
        <?php
        if (class_exists('Attachments')) {
        ?>

            <h2 class="title mb-5 text-center">
                <?php _e("Testimonial", "divdev");  ?>
            </h2>
        <?php }  ?>

        <div class="testimonials  text-center">
            <?php
            if (class_exists('Attachments')) {
                $attachments = new Attachments('testimonials', 72);
                if ($attachments->exist()) {
                    while ($attachments->get()) { ?>
                        <div>
                            <?php echo $attachments->image('thumbnail');  ?>
                            <h4><?php echo esc_html($attachments->field('name'));  ?></h4>
                            <p class="toast-body"><?php echo esc_html($attachments->field('testimonial')); ?></p>
                            <p>
                                <?php echo esc_html($attachments->field('position')); ?>,
                                <strong>
                                    <?php echo esc_html($attachments->field('company')); ?>
                                </strong>
                            </p>

                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>

    </div>
</article>
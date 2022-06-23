<!-- <article class="testimonial-section py-5">
    <div class="container">
        <?php
        if (class_exists('Attachments')) {
        ?>

            <h2 class="title mb-5 text-center">
                <?php _e("Team Members", "divdev");  ?>
            </h2>
        <?php }  ?>

        <div class="team  text-center">
            <?php
            if (class_exists('Attachments')) {
                $attachments = new Attachments('team');
                if ($attachments->exist()) {
                    while ($attachments->get()) { ?>
                        <div class="col-md-4">
                            <?php echo $attachments->image('medium');  ?>
                            <h4><?php echo esc_html($attachments->field('name'));  ?></h4>

                            <p>
                                <?php echo esc_html($attachments->field('email')); ?>
                            </p>
                            <p>
                                <?php echo esc_html($attachments->field('position')); ?>,
                                <strong>
                                    <?php echo esc_html($attachments->field('company')); ?>
                                </strong>
                            </p>
                            <p class="toast-body"><?php echo esc_html($attachments->field('bio')); ?></p>

                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>

    </div>
</article> -->

<?php
if (class_exists('Attachments')) {
?>

    <div class="container team-caontainer">
        <h2 class="title mt-5 mb-5 text-center">
            <?php _e("Team Members", "divdev");  ?>
        </h2>
        <div class="row">
            <div class="team">
                <?php
                $attachments = new Attachments('team');
                if ($attachments->exist()) {
                    while ($attachments->get()) { ?>
                        <div class="col-md-4 left-float">
                            <?php echo $attachments->image('medium');  ?>
                            <h4><?php echo esc_html($attachments->field('name'));  ?></h4>
                            <p>
                                <?php echo esc_html($attachments->field('position')); ?>
                            </p>
                            <p>
                                <strong>
                                    <?php echo esc_html($attachments->field('company')); ?>
                                </strong>
                            </p>
                            <p>
                                <?php echo esc_html($attachments->field('bio')); ?>
                            </p>
                            <p>
                                <?php echo esc_html($attachments->field('email')); ?>
                            </p>
                            <p><button class="btn btn-primary">Contact</button></p>
                        </div>
                <?php
                    }
                }

                ?>
            </div>
        </div>
    </div>

<?php
}

?>
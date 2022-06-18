<div class="comments">
    <h2 class="comments-title">
        <?php
        $divdev_cmt_num = get_comments_number();
        if (1 == $divdev_cmt_num) {
            _e("1 Comments", "divdev");
        } else {
            echo  $divdev_cmt_num . _e(" Comments", "divdev");
        }
        ?>
    </h2>
    <div class="comments-list">
        <?php

        wp_list_comments();

        if (!comments_open()) {
            _e("<div class='Comment-Closed'>Commenting is Closed.</div>", "divdev");
        }

        ?>
    </div>
    <div class="comments-form">
        <?php comment_form();  ?>
    </div>
</div>
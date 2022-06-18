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

        ?>
        <?php
        if ($divdev_cmt_num >= 8) {

        ?>
            <did class="comment-pagination blog-nav pagination-link">
                <div class="nav-item nav-link rounded">
                    <?php
                    the_comments_pagination(array(
                        'prev_text' => __('Previous Comments', 'divdev'),
                        'next_text' => __('Next Comments', 'divdev')
                    ));
                    ?>
                </div>
            </did>

        <?php
        }
        if (!comments_open()) {
            _e("<div class='Comment-Closed'>Commenting is Closed.</div>", "divdev");
        }

        ?>
    </div>


    <div class="comments-form py-4">
        <?php comment_form();  ?>
    </div>
</div>
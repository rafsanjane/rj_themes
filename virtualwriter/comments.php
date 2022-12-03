<div class="comments-wrap">

    <div id="comments" class="row">
        <div class="col-full">

            <h3 class="h2">
                <?php
                $virtualwriter_cmnt_num = get_comments_number();
                if ($virtualwriter_cmnt_num <= 1) {
                    echo $virtualwriter_cmnt_num . " " . __("Comment", "virtualwriter");
                } else {
                    echo $virtualwriter_cmnt_num . " " . __("Comments", "virtualwriter");
                }
                ?>
            </h3>

            <!-- commentlist -->
            <ol class="commentlist">
                <?php
                wp_list_comments();
                ?>

            </ol><!-- end commentlist -->

            <div class="comments-pagination">
                <?php
                the_comments_pagination(array(
                    'screen_reader_text' => __('Pagination', 'virtualwriter'),
                    'prev_text'         => __('Previous', 'virtualwriter'),
                    'next_text'              => __('Next', 'virtualwriter'),
                ));
                ?>

            </div>
            <!-- respond
                    ================================================== -->
            <div class="respond">

                <h3 class="h2">
                    <?php
                    _e("Add Comment", 'virtualwriter');
                    ?>

                </h3>

                <?php
                comment_form();
                ?>

                <!-- end form -->

            </div> <!-- end respond -->

        </div> <!-- end col-full -->

    </div> <!-- end row comments -->
</div>
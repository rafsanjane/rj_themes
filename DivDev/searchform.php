<form role="search" method="get" class="search-form row g-2 g-lg-2 align-items-center" action="<?php echo home_url('/'); ?>">
    <div class="col-12 col-md-9">
        <divdev>
            <span class="screen-reader-text sr-only"><?php echo _x('Search Your Words', 'label') ?></span>
            <input type="search" class="search-field form-control me-md-1 semail" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
        </divdev>
    </div>
    <div class="col-12 col-md-2">
        <input type="submit" class="search-submit btn btn-primary" value="<?php echo esc_attr_x('Search', 'submit button') ?>" />
    </div>
</form>
<!--//signup-form-->
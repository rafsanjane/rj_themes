
<?php
function wp_custom_pagination($args = [], $class = 'pagination')
{
    if ($GLOBALS['wp_query']->max_num_pages <= 1) return;

    $args = wp_parse_args($args, [
        'mid_size'                   => 2,
        'prev_next'                  => false,
        'prev_text'                  => __('Older posts', 'textdomain'),
        'next_text'                  => __('Newer posts', 'textdomain'),
        'screen_reader_text' => __('Posts navigation', 'textdomain'),
    ]);

    $links       = paginate_links($args);
    $next_link = get_previous_posts_link($args['next_text']);
    $prev_link = get_next_posts_link($args['prev_text']);
    $template    = apply_filters('navigation_markup_template', '
    <div class="col-auto">
        <a href="" class="btn btn-outline-white text-dark">%3$s</a>
    </div>
    <div class="col-auto">
        <nav class="navigation %1$s" role="navigation">
                <h2 class="screen-reader-text">%2$s</h2>
                <ul class="nav-links pagination mb-0 text-dark">
                    <li class="page-item">%4$s</li>
                </ul>
        </nav>
    </div>
    <div class="col-auto">
        <a href="" class="btn btn-outline-white text-dark">%5$s</a>
    </div>', $args, $class);

    echo sprintf($template, $class, $args['screen_reader_text'], $prev_link, $links, $next_link);
}

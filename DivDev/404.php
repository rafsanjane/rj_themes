<?php get_header();?>

<?php get_template_part("left-sidebar");?>


<div class="main-wrapper">
	<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>


<div class="container"></div>
    <div class="raw">
        <div class="error-404 text-center col-md-12">
            <h1>404</h1>
            <h3><?php
_e('Sorry! We Couldn\'t Find What You were looking For', 'divdev');?>
</h3>
        </div>
    </div>
</div>




<?php get_footer()?>

<?php get_header();?>



<?php get_template_part("left-sidebar");?>


<div class="main-wrapper" <?php body_class();?>>

	<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">


				<!------Post Start From here----->



				<article class="blog-post px-3 py-5 p-md-5 col-md-12">
					<div class="container single-col-max-width" <?php post_class();?>>
						<?php
while (have_posts()) {
    the_post();
    ?>
							<header class="blog-post-header">
								<h2 class="title mb-2">
									<?php the_title();?>
								</h2>
								<div class="meta mb-3">
									<span class="author">
										<?php echo get_the_author_link(); ?>
									</span>
									<span class="date">
										<?php echo get_the_date(); ?>
									</span>
									<span class="tag">
										<?php the_tags();?>


									</span>
									<span class="comment">
										<a class="text-link" href="#comment-sections">

											<?php echo get_comments_number() . " comments"; ?>
										</a>
									</span>
								</div>
							</header>

							<div class="blog-post-body">
								<figure class="blog-banner">
									<?php

    if (has_post_thumbnail()) {
        $the_thumbnail = get_the_post_thumbnail_url();

        printf('<a href="%s" data-featherlight="image">', $the_thumbnail);

        the_post_thumbnail("large", array("class" => "img-fluid"));

        echo '</a><figcaption class="mt-2 text-center image-caption">Image Credit: <a class="theme-link" href="https://alfurqanitfirm.com" target="_blank">alfurqanitfirm.com (Cock)</a></figcaption>';
    }

    ?>
								</figure>
								<div class="intro">
									<?php
the_content();

    wp_link_pages();
    ?>
								</div>
							</div>
						<?php }?>

						<nav class="blog-nav nav nav-justified my-5 col-md-12">

							<span class=" nav-next-post rounded next-post post-prev col-md-6"><?php previous_post_link('%link');?></span>
							<span class=" nav-next-post rounded next-post col-md-6"><?php next_post_link('%link');?></span>


							<!-- class="nav-link-next nav-item nav-link rounded"' -->
						</nav>


						<!--//container-->

				</article>



				<!-- // Comment Section -->

				<div id="comment-sections" class="container">
					<div class="row comment-section">

						<?php if (comments_open()): ?>

							<div class="col-md-12 offset-md-1 ">

								<?php comments_template()?>

							</div>

						<?php endif;?>

					</div>
				</div>
			</div>
			<div class="col-md-4 sidebar-right">
				<?php
if (is_active_sidebar("sidebar-1")) {
    dynamic_sidebar("sidebar-1");
}
?>

			</div>
		</div>
	</div>











	<!--//promo-container-section-->

	<section class=" theme-bg-light py-5 text-center">
		<div class="container">
			<h2 class="title">Promo Section Heading</h2>
			<p>You can use this section to promote your side projects etc. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
			<figure class="promo-figure">
				<a href="https://made4dev.com" target="_blank"><img class="img-fluid" width="80%" src="<?php echo get_template_directory_uri() . '/assets/images/promo-banner.jpg" alt="image' ?>"></a>
			</figure>
		</div>
	</section>
	<!--//promo-section-end-->

	<?php get_footer();?>
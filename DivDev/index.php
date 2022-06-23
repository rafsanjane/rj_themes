<?php get_header(); ?>

<?php get_template_part("left-sidebar"); ?>


<div class="main-wrapper">
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>

	<section class="cta-section headerimage theme-bg-light py-5">
		<div class="container text-center single-col-max-width">
			<h2 class="heading"><?php bloginfo("title") ?></h2>
			<h4 class="intro"><?php bloginfo("description") ?></h4>
			<div class="single-form-max-width pt-3 mx-auto">
				<?php
				if (is_search()) {
				?>
					<h3>
						<?php _e("Search Result For <span class='tag-css'>", 'divdev') . the_search_query() . "</span>";  ?>
					</h3>
				<?php
				}
				?>
				<?php echo esc_attr(get_search_form());  ?>
				<!--//signup-form-->
			</div>
			<!--//single-form-max-width-->
		</div>
		<!--//container-->
	</section>
	<?php if (is_front_page()) {  ?>

		<section class="cta-section headerimage theme-bg-light py-5">
			<div class="container recent-post text-center ">
				<h2 class="heading"><?php echo "Recent Posts"; ?></h2>
				<div class=" pt-3 mx-auto card">
					<div class="slider-images ">
						<?php
						while (have_posts()) {
							the_post();

							get_template_part("post-formats/content-slider", get_post_format());
						}
						?>
					</div>
					<!--//signup-form-->
				</div>
				<!--//single-form-max-width-->
			</div>
			<!--//container-->
		</section>
	<?php }  ?>



	<section class="blog-list px-3 py-5 p-md-5">

		<div class="container single-col-max-width">
			<?php
			get_template_part("page-templates/search");
			?>
			<!--//search page content-->
			<?php

			while (have_posts()) {
				the_post();

				get_template_part("post-formats/content", get_post_format());
			}
			?>

			<?php
			if (have_posts()) {
			?>
				<div class="container">
					<div class="row">
						<div class="col-md-12 blog-nav pagination-link">
							<div class="nav-item nav-link rounded">
								<?php the_posts_pagination(array(
									'screen_reader_text' => '',
									'mid_size'           => 2,
									'prev_text'          => 'New Post',
									'next_text'          => 'Previous Post',

								));
								?>
							</div>
						</div>

					</div>
				</div>
			<?php }  ?>

		</div>
	</section>

	<!------Post Start From here----->



	<?php
	if (is_front_page()) {
		echo "<hr>";
		get_template_part("/page-templates/testimonial");
		echo "<hr>";
	}
	?>


	<?php
	get_template_part("/page-templates/newslater");
	?>


	<?php get_footer(); ?>
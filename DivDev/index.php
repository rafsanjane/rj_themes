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

			</h2>
			<h2 class="heading"><?php bloginfo("title") ?></h2>
			<h4 class="intro"><?php bloginfo("description") ?></h4>
			<div class="intro">Welcome to my blog. Subscribe and get my latest blog post in your inbox.</div>
			<div class="single-form-max-width pt-3 mx-auto">
				<form class="signup-form row g-2 g-lg-2 align-items-center">
					<div class="col-12 col-md-9">
						<label class="sr-only" for="semail">Your email</label>
						<input type="email" id="semail" name="semail1" class="form-control me-md-1 semail" placeholder="Enter email">
					</div>
					<div class="col-12 col-md-2">
						<button type="submit" class="btn btn-primary">Subscribe</button>
					</div>
				</form>
				<!--//signup-form-->
			</div>
			<!--//single-form-max-width-->
		</div>
		<!--//container-->
	</section>

	<section class="blog-list px-3 py-5 p-md-5">

		<div class="container single-col-max-width">
			<?php
			while (have_posts()) {
				the_post();

				get_template_part("post-formats/content", get_post_format());
			}

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
		</div>
	</section>

	<!------Post Start From here----->



	<?php get_footer(); ?>
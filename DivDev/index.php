<?php get_header();?>

<?php get_template_part("left-sidebar");?>


<div class="main-wrapper">
	<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}
?>

	<section class="cta-section headerimage theme-bg-light py-5">
		<div class="container text-center single-col-max-width">


			<h2 class="heading"><?php bloginfo("title")?></h2>
			<h4 class="intro"><?php bloginfo("description")?></h4>
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



	<!------Post Start From here----->

	<section class="blog-list px-3 py-5 p-md-5">

		<div class="container single-col-max-width" <?php post_class();?>>
			<?php
while (have_posts()) {
    the_post();
    ?>
				<div class="item mb-5">
					<div class="row g-3 g-xl-0">
						<div class="col-2 col-xl-3">
							<a class="text-link" href="<?php the_permalink();?>">
								<?php
if (has_post_thumbnail()) {
        the_post_thumbnail("thumbnail");
    } else {
        echo '<img class="img-fluid post-thumb " src="assets/images/blog/blog-post-thumb-1.jpg" alt="image">';
    }
    ?>
							</a>
						</div>
						<div class="col">
							<h3 class="title mb-1">
								<a class="text-link" href="<?php the_permalink();?>">
									<?php the_title();?>
								</a>
							</h3>
							<div class="meta mb-1">
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
							<div class="intro">

								<?php
the_excerpt();

    ?>
							</div>
							<!-- <a class="text-link" href="blog-post.html">Read more &rarr;</a> -->
						</div>
						<!--//col-->
					</div>
					<!--//row-->
				</div>
				<!--//item-->
			<?php
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

));?>
						</div>
					</div>

				</div>
			</div>



			<!-- <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link d-none rounded-left" href="#">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded" href="#">
					  </a>
				</nav> -->

		</div>
	</section>

	<?php get_footer();?>
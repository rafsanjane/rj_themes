<?php

use FakerPress\Module\Attachment;

$divdev_layout_class = "col-md-9";
if (!is_active_sidebar("sidebar-1")) {
	$divdev_layout_class = "col-md-12";
}

?>



<?php get_header(); ?>



<?php get_template_part("left-sidebar"); ?>


<div class="main-wrapper" <?php body_class(); ?>>

	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
	?>


	<div class="container-fluid">
		<div class="row">
			<div class="<?php echo $divdev_layout_class; ?>">
				<!------Post Start From here----->
				<article class="blog-post px-3 py-5 p-md-5 col-md-12">
					<div class="container single-col-max-width" <?php post_class(); ?>>
						<?php
						while (have_posts()) {
							the_post();
						?>
							<header class="blog-post-header">
								<h2 class="title mb-2">
									<?php the_title(); ?>
								</h2>
								<div class="meta mb-3">
									<span class="author">
										<?php echo get_the_author_link(); ?>
									</span>
									<span class="date">
										<?php echo get_the_date(); ?>
									</span>
									<?php
									if (is_tag()) {
									?>
										<span class="tag">
											<?php the_tags(); ?>
										</span>
									<?php
									}
									?>
									<span class="comment">
										<a class="text-link" href="#comment-sections">

											<?php echo get_comments_number() . " comments"; ?>
										</a>
									</span>
								</div>
							</header>

							<div class="blog-post-body">
								<div class="slider-images">
									<?php
									if (class_exists('Attachments')) {
										$attachments = new Attachments('slider');
										if ($attachments->exist()) {
											while ($attachments->get()) { ?>
												<div>
													<?php echo $attachments->image('large');  ?>

												</div>
									<?php
											}
										}
									}
									?>
								</div>
								<figure class="blog-banner">
									<?php
									if (!class_exists('Attachments')) {
										if (has_post_thumbnail()) {
											$the_thumbnail = get_the_post_thumbnail_url();

											printf('<a href="%s" data-featherlight="image">', $the_thumbnail);

											the_post_thumbnail("large", array("class" => "img-fluid"));

											echo '</a><figcaption class="mt-2 text-center image-caption">Image Credit: <a class="theme-link" href="https://alfurqanitfirm.com" target="_blank">alfurqanitfirm.com (Cock)</a></figcaption>';
										}
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
						<?php } ?>

						<nav class="blog-nav nav nav-justified my-5 col-md-12">

							<span class=" nav-next-post rounded next-post post-prev col-md-6"><?php previous_post_link('%link'); ?></span>
							<span class=" nav-next-post rounded next-post col-md-6"><?php next_post_link('%link'); ?></span>


							<!-- class="nav-link-next nav-item nav-link rounded"' -->
						</nav>


						<!--//container-->

						<!-- // Comment Section -->

						<div class="authorsection">
							<div class="row">
								<div class="col-md-2 authorimage">
									<?php
									echo  '<img alt="" src="http://localhost/wp_dev/wp-content/themes/DivDev/assets/images/profile.png" srcset="http://0.gravatar.com/avatar/38503640a6b7b9e9a578279f9941b328?s=192&amp;d=mm&amp;r=g 2x" class="avatar2 avatar-96 photo" height="96" width="96" loading="lazy">';
									// echo  get_avatar(get_the_author_meta("id"));
									?>

								</div>
								<div class="col-md-10">
									<h4>
										<?php
										echo get_the_author_meta("display_name");
										?>
									</h4>

									<p>
										<?php
										echo get_the_author_meta("description");
										?>

									</p>

								</div>
							</div>
						</div>



				</article>





				<!-- // Comment Section -->

				<div id="comment-sections" class="container">
					<div class="row comment-section">

						<?php if (comments_open()) : ?>

							<div class="col-md-12 offset-md-1 ">

								<?php comments_template() ?>

							</div>

						<?php endif; ?>

					</div>
				</div>
			</div>
			<?php
			if (is_active_sidebar("sidebar-1")) :
			?>

				<div class="col-md-3 sidebar-right">
					<?php
					if (is_active_sidebar("sidebar-1")) {
						dynamic_sidebar("sidebar-1");
					}
					?>
				</div>
			<?php
			endif;
			?>

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

	<?php get_footer(); ?>
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
									?>
									<br>
									<?php
									if (get_post_format() == "image" && function_exists("the_field")) {
									?>
										<div class="image-details bordered p-3">
											<strong>Camrea Model: </strong><?php the_field("camera_model"); ?><br />
											<strong>Location:</strong> <?php the_field("location"); ?><br />
											<strong>Capture Date: </strong><?php the_field("date"); ?><br />
											<?php if (get_field("do_need_license")) : ?>
												<strong>license details: </strong>
												<?php echo apply_filters("the_content", get_field("license_details")); ?><br />
											<?php endif; ?>
											<?php
											$divdev_image_id = get_field("random_image");
											echo "<img src='" . esc_url(wp_get_attachment_image_src($divdev_image_id, "thumbnail")[0]) . "'/><br/>";
											?>
											<p class="p-2">
												<?php
												$file = get_field("attachment");
												if ($file) {
													$file_url = wp_get_attachment_url($file);
													$file_thumb = get_field("thumbnail", $file);
													if ($file_thumb) {
														$file_thumb_details = wp_get_attachment_image_src($file_thumb);
<<<<<<< HEAD
														echo "Download:  <a target='_blank' href='{$file_url}'><img src='" . esc_url($file_thumb_details[0]) . "'/></a><br />";
=======
														echo "<a target='_blank' href='{$file_url}'><img src='" . esc_url($file_thumb_details[0]) . "'/></a><br />";
>>>>>>> 6a034df26ac6b091bb5e45fd2d2043cdd7f0cc57
													} else {
														echo "<a target='_blank' href='{$file_url}'>Download {$file_url}</a><br />";
													}
												}
												?>
											</p>
										</div>
									<?php
									}
									?>
<<<<<<< HEAD

									<br>
									<?php
									if (get_post_format() == "image" && class_exists("CMB2")) :

										$divdev_model = get_post_meta(get_the_ID(), "_divdev_camera_model", true);
										$divdev_location = get_post_meta(get_the_ID(), "_divdev_location", true);
										$divdev_date = get_post_meta(get_the_ID(), "_divdev_date", true);
										$divdev_licensed = get_post_meta(get_the_ID(), "_divdev_licensed", true);
										$divdev_license_information = get_post_meta(get_the_ID(), "_divdev_license_information", true);

									?>
										<div class="image-details bordered p-3">
											<strong>Camrea Model: </strong><?php echo esc_html($divdev_model); ?><br />
											<strong>Location:</strong> <?php echo esc_html($divdev_location); ?><br />
											<strong>Capture Date: </strong><?php echo esc_html($divdev_date) ?><br />
											<?php if ($divdev_licensed) : ?>
												<strong>license details: </strong>
												<?php echo apply_filters("the_content", $divdev_license_information); ?><br />
											<?php endif; ?>
											<p class="p-2">
												<?php
												$divdev_image_id = get_post_meta(get_the_ID(), "_divdev_image_id", true);
												echo "<img src='" . esc_url(wp_get_attachment_image_src($divdev_image_id, "thumbnail")[0]) . "'/><br/>";
												?>
											</p>
											<p class="p-2">
												<?php
												$divdev_file = get_post_meta(get_the_ID(), "_divdev_resume", true);
												echo "<a href=" . esc_url($divdev_file) . ">Download</a>";
												?>
											</p>
										</div>
									<?php
									endif;
									?>

									<?php
									wp_link_pages();
									?>
=======
>>>>>>> 6a034df26ac6b091bb5e45fd2d2043cdd7f0cc57
								</div>

							</div>
						<?php } ?>
						<?php if (function_exists("the_field") && get_field("related_posts")) : ?>
							<div class="related-post">
								<div class=" row col-md-12">
									<h1><?php _e("Related Posts", "divdev");  ?></h1>
									<?php
									$relatedd_posts = get_field("related_posts");
									?>
									<?php

									$divdev_rp = new WP_Query(array(
										'post__in' => $relatedd_posts,
										'orderby' => 'post__in',
									));
									while ($divdev_rp->have_posts()) {
										$divdev_rp->the_post();

									?>
										<div class="col-md-2 p-2">
											<a class="text-link" href="<?php the_permalink(); ?>">
												<?php
												if (has_post_thumbnail()) {
													the_post_thumbnail('thumbnail', array('class' => 'img-fluid'));
												} else {
													echo '<img class="img-fluid post-thumb hello" src="' . get_theme_file_uri("/assets/images/blog/chicken-" . rand(1, 10) . ".jpg") . '" alt="image">';
												}
												?>
											</a>
										</div>
										<div class="col-md-4 p-2">
											<h4 class="mb-1">
												<a class="text-link" href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a>
											</h4>
										</div>
									<?php

									}

									wp_reset_query();  ?>

								</div>
							</div>
						<?php endif; ?>
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
									if (get_avatar(get_the_author_meta("ID"))) {
										echo  get_avatar(get_the_author_meta("ID"));
									} else {
										echo  '<img alt="" src="http://localhost/wp_dev/wp-content/themes/DivDev/assets/images/profile.png" srcset="http://0.gravatar.com/avatar/38503640a6b7b9e9a578279f9941b328?s=192&amp;d=mm&amp;r=g 2x" class="avatar2 avatar-96 photo" height="96" width="96" loading="lazy">';
									}

									// 
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
									<p>
										<?php
										if (function_exists("the_field")) {
										?>

											<a href="<?php the_field("linkedin", "user_" . get_the_author_meta("ID"));  ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in fa-fw"></i></a>
											<a href="<?php the_field("facebook", "user_" . get_the_author_meta("ID"));  ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook fa-fw"></i></a>
											<a href="<?php the_field("twitter", "user_" . get_the_author_meta("ID"));  ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter fa-fw"></i></a>

										<?php
										}
										?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</article>





				<!-- // Comment Section -->
				<?php if (!post_password_required()) : ?>
					<div id="comment-sections" class="container">
						<div class="row comment-section">
							<div class="col-md-12 px-5 py-4 ">

								<?php comments_template(); ?>

							</div>



						</div>
					</div>
				<?php endif; ?>
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
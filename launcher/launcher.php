<?php

/*
 * Template Name: Launcher Homepage
 */
the_post();
get_header();

$placeholder_text = get_post_meta(get_the_ID(), "placeholder", true);
$placeholder_lebel = get_post_meta(get_the_ID(), "Button Level", true);
$placeholder_hint = get_post_meta(get_the_ID(), "hint", true);

?>

	<div class="fh5co-loader"></div>

	<aside id="fh5co-aside" role="sidebar" class="text-center home-side-image" >
		<h1 id="fh5co-logo"><a href="<?php echo site_url(); ?>">
        <?php bloginfo('name');?>

        </a></h1>
	</aside>

	<div id="fh5co-main-content">
		<div class="dt js-dt">
			<div class="dtc js-dtc">
				<div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-lg-7">
								<div class="fh5co-intro animate-box">
									<h2>
                                        <?php the_title();?>
                                    </h2>
									<p>
                                        <?php the_content();?>
                                    </p>
								</div>
							</div>

							<div class="col-lg-7 animate-box">
								<form action="#" id="fh5co-subscribe">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo esc_attr($placeholder_text); ?>">
										<input type="submit" value="<?php echo esc_attr($placeholder_lebel); ?>" class="btn btn-primary">
										<p class="tip">
											<?php echo esc_html($placeholder_hint); ?>
										</p>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div id="fh5co-footer">
			<div class="row">
				<div class="col-md-6 fh5co-social">
					<?php
if (is_active_sidebar("footer-left")) {
    dynamic_sidebar("footer-left");
}
?>

				</div>
				<div class="col-md-6 fh5co-copyright">
					<?php
if (is_active_sidebar("footer-right")) {
    dynamic_sidebar("footer-right");
}
?>
				</div>
			</div>
		</div>

	</div>


<?php get_footer();?>


<header class="header text-center">
	<h1 class="blog-name pt-lg-4 mb-0">
		<a class="no-text-decoration" href="<?php echo site_url(); ?>">
		<?php
if (current_theme_supports("custom-logo")) {
    the_custom_logo();

}
?>
		</a>
	</h1>

	<nav class="navbar navbar-expand-lg navbar-dark">

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navigation" class="collapse navbar-collapse flex-column">
			<div class="profile-section pt-3 pt-lg-0">
				<img class="profile-image mb-3 rounded-circle mx-auto" src="<?php echo get_template_directory_uri() . '/assets/images/profile.png' ?>" alt="image">

				<div class="bio mb-3">Hi, my name is Anthony Doe. Briefly introduce yourself here. You can also provide a link to the about page.<br><a href="<?php echo site_url() . '/author.php'; ?>">Find out more about me</a></div>
				<!--//bio-->
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/md-rafsanjani/"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/md-rafsanjani/"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="https://github.com/rafsanjane"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul>
				<!--//social-list-->
				<hr>
			</div>
			<!--//profile-section-->

			<!-- <ul class="navbar-nav flex-column text-start">
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo site_url(); ?>"><i class="fas fa-home fa-fw me-2"></i>Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url(); ?>"><i class="fas fa-bookmark fa-fw me-2"></i>Blog Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url() . '/page.php'; ?>"><i class="fas fa-user fa-fw me-2"></i>About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url() . '/author.php'; ?>"><i class="fas fa-user fa-fw me-2"></i>About Me</a>
				</li>
			</ul> -->
			<?php

$argu = ['home ', 'bookmark ', 'user ', 'contact'];
$arguloop = '';
foreach ($argu as $value) {
    $arguloop .= $value;
}

wp_nav_menu(
    array(
        'theme_location' => 'header-menu',
        'container'      => 'ul',
        'menu_id'        => '',
        'menu_class'     => 'navbar-nav flex-column text-start',
        'link_before'    => '<i class="fas fa-' . $arguloop . ' fa-fw me-2"></i>',

    )
);?>



			<div class="my-2 my-md-3">
				<a class="btn btn-primary" href="https://rafsanjane.com/" target="_blank">Get in Touch</a>
			</div>
		</div>
	</nav>
</header>
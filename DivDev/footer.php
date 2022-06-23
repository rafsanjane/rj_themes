<footer class="footer text-center py-2 theme-bg-dark">
	<div class="justify-content-around ">
		<div class="row ">
			<div class="col-md-3">

				<?php
				if (current_theme_supports("custom-logo")) {
					the_custom_logo();
				}
				?>
			</div>
			<div class="col-md-5 vertically-align">
				<div class="vertically-align-middle">
					<?php if (is_active_sidebar("footer-left")) {
						dynamic_sidebar("footer-left");
					}
					?>
				</div>
			</div>
			<div class="col-md-4 vertically-align">
				<div class="vertically-align-middle">
					<?php if (is_active_sidebar("footer-right")) {
						dynamic_sidebar("footer-right");
					}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>

</div>
<!--//main-wrapper-->




<!-- Javascript -->


<?php wp_footer(); ?>




</body>

</html>
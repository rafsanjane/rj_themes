<footer class="footer text-center py-2 theme-bg-dark">


	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php if (is_active_sidebar("footer-left")) {
					dynamic_sidebar("footer-left");
				}
				?>
			</div>
			<div class="col-md-6">
				<?php if (is_active_sidebar("footer-right")) {
					dynamic_sidebar("footer-right");
				}
				?>
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
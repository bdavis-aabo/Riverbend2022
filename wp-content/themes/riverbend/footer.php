	<footer class="footer">
		<div class="footer-container">
			<div class="footer-left">
				<img src="<?php bloginfo('template_directory') ?>/assets/images/eho-icon.png" class="img-fluid alignleft" alt="Equal Housing Opportunity Logo" />
				<p class="copyright">
					&copy <?php echo date('Y') ?> Lowrey Group Development
				</p>
			</div>

			<div class="footer-right">
				A Lowrey Group Development <?php echo file_get_contents(get_template_directory() . '/assets/images/lowrey-mark.svg') ?>
			</div>
		</div>
	</footer>

	<?php get_template_part('home/home-contact') ?>

	</div> <!-- /end body-wrapper -->
	<?php wp_footer() ?>
</body>
</html>

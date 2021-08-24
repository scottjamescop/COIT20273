<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KeppelFM
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container firstFooter">
			<div class="row">
				<div class="col-md-2">

				</div>
				<div class="col-md-4">
					<h4>KEPPEL FM</h4>
					78 John Street<br />
					(PO Box 346)<br />
					Yeppoon,<br />
					Queensland 4703<br />
					Phone (07) 4939 8211
				</div>
				<div class="col-md-4">
					<h4>Connect with Us</h4>
					<img class="socialLogo" src="<?php echo wp_get_attachment_image_src(38, "full")[0]; ?>" />
				</div>
				<div class="col-md-2">

				</div>
			</div>
		</div>
		<div class="container-fluid noPadding bottomFooter">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p class="smallText">© 1996 -2021; Keppel FM 91.3</p>
				</div>	
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

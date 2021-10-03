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
					<a href="https://www.facebook.com/keppelfm/" target="_blank"><img class="socialLogo" src="<?php echo wp_get_attachment_image_src(38, "full")[0]; ?>" /></a>
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

<!-- DF start of Live Search results search field for main page and other pages
<div class="search-overlay search-overlay-active">
	Hello 123
	<div class ="container">
		<i class="fa fa-search search-overlay_icon" aria-hidden="true"></i>
		<input type="text" class="search-term" placeholder="What are you looking for" id="search-term">
		<i class="fa fa-window search-overlay_close" aria-hidden="true"></i>
	</div>

</div> -->
<a href="https://streaming.radio.co/s2abf62756/listen" target="_blank">
	<div class="audioLabel">Listen Live!</div>

</a>
<!--<div class="audioPlayer">
	<audio controls>
	  <source src="" type="audio/mpeg">
	Your browser does not support the audio element.
	</audio>
	<div class="minifier">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-contract" viewBox="0 0 16 16">
		  <path fill-rule="evenodd" d="M.172 15.828a.5.5 0 0 0 .707 0l4.096-4.096V14.5a.5.5 0 1 0 1 0v-3.975a.5.5 0 0 0-.5-.5H1.5a.5.5 0 0 0 0 1h2.768L.172 15.121a.5.5 0 0 0 0 .707zM15.828.172a.5.5 0 0 0-.707 0l-4.096 4.096V1.5a.5.5 0 1 0-1 0v3.975a.5.5 0 0 0 .5.5H14.5a.5.5 0 0 0 0-1h-2.768L15.828.879a.5.5 0 0 0 0-.707z"/>
		</svg>
	</div>
</div>
<div class="playerExpand">
	<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
	  <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
	</svg>
</div>-->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php

/*

Template Name: Our Shows Page Template

*/
get_header();
?>

<section>
	<div class="container">
		<div class="row" style="margin-top: 40px;">
			<div class="col-lg-5 squareContainer">
				<div class="tr Square" style="background-image: url(<?php echo wp_get_attachment_image_src(30, "full")[0]; ?>); background-position: center center; background-size: cover;">

				</div>
				<div class="bl Square">

				</div>
			</div>
			<div class="col-lg-1">
			</div>
			<div class="col-lg-6">
				<div class="contentBlock">
					<h3>Become a Sponsor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button class="primary">Learn More</button>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
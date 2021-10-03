<?php

/*

Template Name: Sponsorship Page Template

*/
get_header();
?>

<style>
	p{font-size: 14px;text-align: justify;}
</style>
<!-- PAGE CODE GOES HERE -->
<main id="primary" class="site-main">

<div style = "margin:5%;">

	<h1><?php echo get_field('page_title'); ?></h1>
	
	<div class="col-lg-5" style="float:left; display: inline;margin-right: 40px;margin-left: 30px;">
		<p><?php echo get_field('sponsor_introduction'); ?></p>
	</div>

	<div class="col-lg-6" style = "float:left; display:inline;"> 
		<a style = "cursor:pointer;"><img src="<?php echo wp_get_attachment_image_src(192, "full")[0]; ?>" /></a>
	</div>
	
	<div>
		<p style="color: red; font-weight: bold;"><?php echo get_field('sponsorship_options_title'); ?></p>
		<p style="color: red; font-weight: bold;"><?php echo get_field('news_break_sponsorship_title'); ?></p>
		<p style="color: red;"><?php echo get_field('news_break_sponsorship_introduction'); ?></p>
		<p><?php echo get_field('news_break_sponsorship_types'); ?></p>
		<p style="color: red; font-weight: bold;"><?php echo get_field('show_sponsorship_title'); ?></p>
		<p style="color: red;"><?php echo get_field('show_sponsorship_introduction'); ?></p>
		<p><?php echo get_field('show_sponsorship_types'); ?></p>
		<p style="color: red; font-weight: bold;"><?php echo get_field('standard_sponsorship_title'); ?></p>
		<p><?php echo get_field('standard_sponsorship_types'); ?></p>
		<p style="color: red; font-weight: bold;"><?php echo get_field('targeted_promo_sponsorship_title'); ?></p>
		<p style="color: red;"><?php echo get_field('targeted_promo_sponsorship_introduction'); ?></p>
		<p><?php echo get_field('targeted_promo_sponsorship_types'); ?></p>
	</div>

	

	<div>
		<a style = "cursor:pointer;"><img class="col-lg-6" style = "float:left; display:inline;padding:3%;" src="<?php echo wp_get_attachment_image_src(193, "full")[0]; ?>" /></a>
		<a style = "cursor:pointer"><img class="col-lg-6" style = "float:left; display:inline;padding:3%;" src="<?php echo wp_get_attachment_image_src(194, "full")[0]; ?>" /></a>
	</div>

	<div>
		<p style="color: red; font-weight: bold;"><?php echo get_field('our_audience_title'); ?></p>
		<p style="color: red;"><?php echo get_field('our_audience_introduction'); ?></p>
		<p><?php echo get_field('our_audience_details'); ?></p>
	</div>
		

	<div>
		<p style="color: red; font-weight: bold;"><?php echo get_field('sponsor_receive_title'); ?></p>
		<p><?php echo get_field('sponsor_receive_introduction'); ?></p>
		<p style="color: red; font-weight: bold;"><?php echo get_field('sponsor_enjoy_title'); ?></p>
		<p><?php echo get_field('sponsor_enjoy_details'); ?></p>
	</div>

</div>

</main><!-- #main -->
<?php get_footer(); ?>
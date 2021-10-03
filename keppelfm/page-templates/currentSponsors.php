<?php

/*

Template Name: currentSponsors Page Template

*/
get_header();
?>
<style>
	.sponsorImage {
		min-height:300px;
		width:100%;
	}

	.sponsorIcon{
		height: 20px;
		width: 20px;
		display: inline-block;
	}

	.sponsorFont {
		font-size: 1.5em;
	}

</style>
<!-- PAGE CODE GOES HERE -->
<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('326');?>'); background-repeat: no-repeat; background-size: cover; background-position: center bottom;">
	<div class="overlay">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<h1>Our Sponsors</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<br>

<section>
<div class="container">
	<h2>CLICK ON THE SPONSOR TO BRING UP THEIR WEBSITE.</h2>
	<br>
	
		<div class="row">
	<?php while( have_rows('sponsors_repeater') ) : the_row();

        // Load sub field value.
        $sponsorsPicture = get_sub_field('sponsors_picture');
        $sponsorsWebsite = get_sub_field('sponsors_website');
        $sponsorsFaceBookLink = get_sub_field('sponsors_facebook');
        $sponsorsName = get_sub_field('sponsors_name');
        $sponsorsAddress = get_sub_field('sponsors_address');
        ?>
        
			<div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px;">
				<a href="<?php echo $sponsorsWebsite; ?>" style="padding:0;">
					<div style="background-image: url(<?php echo $sponsorsPicture; ?>); background-position: center center; background-size: contain; background-repeat: no-repeat;" class="sponsorImage">
					</div>
				</a>				
			
				<div class="sponsorFont" >
					<a href="<?php echo $sponsorsFaceBookLink; ?>" style="padding:0;text-decoration: none">
						<img class="sponsorIcon" src="<?php echo wp_get_attachment_image_src(498, "full")[0]; ?>" />
					</a>
					&nbsp;<?php echo $sponsorsName; ?>
				</div>

				<div>
					<span title="Address">
						<img class="sponsorIcon" src="<?php echo wp_get_attachment_image_src(333, "full")[0]; ?>" />
					</span>
					&nbsp;<?php echo $sponsorsAddress; ?>
				</div>
			</div>
			
	<?php 
    // End loop.
    endwhile;
    ?>
    	</div>
	      
</div>

</section>

<?php get_footer(); ?>
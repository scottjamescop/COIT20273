<?php

/*

Template Name: Home Page Template

*/
	get_header();

?>
<style>
	.heroCircle{
		height: 350px;
		width: 100%;
		border-radius: 20px;
		box-shadow: 2px 2px 8px #777;
	}
	
	button{
		border-radius: 7px;
		box-shadow: 1px 4px 20px #777;
		border: 0px solid #DC0000;
		padding: 10px 15px;
		transition: .2s all;
	}
	button:hover{
		box-shadow: 1px 2px 4px #777;
	}
	button.primary{
		color: #F8F9F9;
		background-image: linear-gradient(to right, #dc0000, #c70103, #b30305, #9f0405, #8b0505);	
		background-size: 180%;
		background-position: left;
		font-weight: bold;
		margin-right: 15px;
	}
	button.primary:hover{
		background-position: right;
	}
	button.secondary{
		color: #000;
		background-image: linear-gradient(to right, #f8f9f9, #efeff0, #e5e6e6, #dcdcdc, #d3d3d3, #cdcdcd, #c7c7c7, #c1c1c1, #bbbbbb);	
		font-weight: bold;
		background-size: 180%;
		background-position: left;
	}
	button.secondary:hover{
		background-position: right;
	}
	h3{
		color: #DC0000;
	}
	.heroBG{
		height: 100%;
		width: 100%;
	}
	.squareContainer{
		position: relative;
	}
	.Square{
		width: 98%;
		height: 97%;
		position: absolute;
		background-image: linear-gradient(to left, #dc0000, #c70103, #b30305, #9f0405, #8b0505);
		border-radius: 15px;	
		box-shadow: 2px 2px 6px #444;
	}
	.tr{
		top: 0;
		right: 0;
		z-index: 2;
	}
	.bl{
		bottom: 0;
		left: 0;
	}
	
	.hero h2{
		padding-bottom: 20px;
	}
	.sponsorRow{
		text-align: center;

	}
</style>
<div class="hero">
	<div class="heroBG" style="background-image: url(<?php echo wp_get_attachment_image_src(29, "full")[0]; ?>); background-position: top right; background-size: contain; background-repeat: no-repeat;">
		<div class="container" style="position: absolute; transform: translate(-50%, -50%); top: 60%; left: 50%;">
			<div class="row">			
				<div class="col-12 col-lg-7">
					<h3><?php echo get_field('hero_flavor_text'); ?></h3>
					<h1 class="salsa"><?php echo get_field('hero_title'); ?></h1>
					<h2 class="salsa"><?php echo get_field('hero_sub_text'); ?></h2>
					<a href="<?php echo get_field('hero_button_one_link'); ?>"><button class="primary"><?php echo get_field('hero_button_one_text'); ?></button></a><a href="<?php echo get_field('hero_button_two_link'); ?>"><button class="secondary"><?php echo get_field('hero_button_two_text'); ?></button></a>
				</div>
				<div class="col-12 col-lg-5">
					<div class="heroCircle d-none d-lg-block" style="background-image: url(<?php echo wp_get_attachment_image_src(28, "full")[0]; ?>); background-position: top right; background-size: cover;">				
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<section>
	<div class="container-fluid sponsorRow">
		<div id="carouselExampleSlidesOnly" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
		  <div class="carousel-inner">
		  	<!-- repeater loop -->
		  	<?php 
		  	$i = 0;
		  	while( have_rows('ad_banners') ) : the_row();

		        // Load sub field value.
		        $desktopPic = get_sub_field('desktop_image');
		        $mobilePic = get_sub_field('mobile_image');
		        ?>
		        <div class="carousel-item <?php if($i==0) { echo "active";} ?> ">
			      <img src="<?php echo $desktopPic; ?>" class="" alt="...">
			    </div>
			    
		       
			<?php 
		    // End loop.
		    $i++;
		    endwhile;
		    ?>
		    
		  </div>
		</div>
		<div id="myCarousel" class="carousel slide d-block d-md-none" data-bs-ride="carousel">
		  <div class="carousel-inner">
		  	<!-- repeater loop -->
		  	<?php 
		  	$i = 0;
		  	while( have_rows('ad_banners') ) : the_row();

		        // Load sub field value.
		        $desktopPic = get_sub_field('desktop_image');
		        $mobilePic = get_sub_field('mobile_image');
		        ?>
		        <div class="carousel-item <?php if($i==0) { echo "active";} ?> ">
			      <img src="<?php echo $mobilePic; ?>" class="" alt="...">
			    </div>
			    
		       
			<?php 
		    // End loop.
		    $i++;
		    endwhile;
		    ?>
		    
		  </div>
		</div>

	</div>

</section>
<section>
	<div class="container padt40 padb40">
		<div class="row" style="margin-top: 40px;">
			<div class="col-12 col-lg-5 squareContainer">
				<div class="tr Square" style="background-image: url(<?php echo get_field('first_section_image'); ?>); background-position: center center; background-size: cover;">

				</div>
				<div class="bl Square">

				</div>
			</div>
			<div class="col-lg-1">
			</div>
			<div class="col-12 col-lg-6">
				<div class="contentBlocksc">
					<h3><?php echo get_field('sponsor_header'); ?></h3>
					<p><?php echo get_field('sponsor_text'); ?></p>
					<a href="<?php echo get_field('sponsor_button_link'); ?>"><button class="primary fullWidth"><?php echo get_field('sponsor_button_text'); ?></button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid tileRow">
		<div class="row">
			
			<div class="col-12 col-lg-4 posrel tileParent" >
				<a href="<?php echo get_field('qlolink'); ?>">
					<div class="tileContainer" style="background-image: url(<?php echo get_field('qloimage'); ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;">					
					</div>
					<div class="tileContent">
						<h2><?php echo get_field('qlo'); ?></h2>
					</div>
				</a>
			</div>
			<div class="col-12 col-lg-4 posrel tileParent" >
				<a href="<?php echo get_field('qltlink'); ?>">
					<div class="tileContainer" style="background-image: url(<?php echo get_field('qltimage'); ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;">					
					</div>
					<div class="tileContent">
						<h2><?php echo get_field('qlttext'); ?></h2>
					</div>
				</a>
			</div>
			<div class="col-12 col-lg-4 posrel tileParent" >
				<a href="<?php echo get_field('qlthlink'); ?>">
					<div class="tileContainer" style="background-image: url(<?php echo get_field('qlthimage'); ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;">					
					</div>
					<div class="tileContent">
						<h2><?php echo get_field('qlthtext'); ?></h2>
					</div>
				</a>
			</div>


		</div>
	</div>
</section>


<?php get_footer(); ?>
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
	.hero{
		height: 65vh;
		position: relative;
		background-image: linear-gradient(to left top, #f0f0f0, #ebebeb, #e6e6e6, #e1e1e1, #dcdcdc);
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
	.contentBlock{
		padding: 80px 0px;
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
				<div class="col-lg-7">
					<h3><?php echo get_field('hero_flavor_text'); ?></h3>
					<h1><?php echo get_field('hero_title'); ?></h1>
					<h2><?php echo get_field('hero_sub_text'); ?></h2>
					<button class="primary">Listen Now</button><button class="secondary">Become a Sponsor</button>
				</div>
				<div class="col-lg-5">
					<div class="heroCircle d-none d-md-block" style="background-image: url(<?php echo wp_get_attachment_image_src(28, "full")[0]; ?>); background-position: top right; background-size: cover;">				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section>
	<div class="container-fluid sponsorRow">
		<img src="<?php echo wp_get_attachment_image_src(33, "full")[0]; ?>" />
	</div>
</section>
<section>
	<div class="container">
		<div class="row" style="margin-top: 40px;">
			<div class="col-lg-5 squareContainer">
				<div class="tr Square" style="background-image: url(<?php echo get_field('first_section_image'); ?>); background-position: center center; background-size: cover;">

				</div>
				<div class="bl Square">

				</div>
			</div>
			<div class="col-lg-1">
			</div>
			<div class="col-lg-6">
				<div class="contentBlock">
					<h3><?php echo get_field('sponsor_header'); ?></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="<?php echo get_field('sponsor_button_link'); ?>"><button class="primary">Learn More</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid tileRow">
		<div class="row">
			<div class="col-md-4" >
				<div class="tileContainer" style="background-image: url(<?php echo wp_get_attachment_image_src(37, "full")[0]; ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;">
					<div class="tileContent">
						<h2>Our Shows</h2>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="tileContainer" style="background-image: url(<?php echo wp_get_attachment_image_src(44, "full")[0]; ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;">
					<div class="tileContent">
						<h2>Events</h2>
					</div>
				</div>
			</div>
			<div class="col-md-4" >
				<div class="tileContainer" style="background-image: url(<?php echo wp_get_attachment_image_src(45, "full")[0]; ?>); background-position: center center; background-size: cover; background-repeat: no-repeat;">
					<div class="tileContent">
						<h2>Gallery</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
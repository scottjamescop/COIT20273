<?php

/*

Template Name: Be a Member Page Template

*/
get_header();
?>

<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('376');?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
	<div class="overlay">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<h1>Become A Member</h1>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="ftco-section">
	
		<div class="container">
			 
			<div class="row">


				<div class="col-md-12">

					<div class="wrapper">

						<div class="row no-gutters mb-5">

							<div class="col-md-6">

								<div class="contact-wrap w-100 p-md-5 p-4">

						
									<h3 class="mb-4">Membership Form</h3>
							

								<?php echo do_shortcode('[contact-form-7 id="384" title="Membership"]'); ?>
								</div>
							</div>	

							<div class="col-md-6 text_on_side">
								<div class="vert-center">
										<div class="col-md-12 front_text"> &#9755; <span class="heading"><?php echo get_field('first_heading'); ?>:</span> <?php echo get_field('first_point_text'); ?> </div>

										<div class="col-md-12 front_text">&#9755; <?php echo get_field('second_point_text'); ?></div>

								  		<div class="col-md-12 front_text">&#9755; <span class="heading"><?php echo get_field('second_heading'); ?>: </span> <?php echo get_field('third_point_text'); ?></div>

								  		<div class="col-md-12 front_text">&#9755; <?php echo get_field('fourth_point_text'); ?></div>
							   </div>
								  
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

<?php get_footer(); ?>
<?php

/*

Template Name: Contact Us Page Template

*/
get_header();
?>
<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('261');?>'); background-repeat: no-repeat; background-size: cover; background-position: center bottom;">
	<div class="overlay">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<h1>Contact</h1>
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

									<h3 class="mb-4">Contact Us</h3>
									<?php echo do_shortcode('[contact-form-7 id="66" title="Contact Us"]'); ?>
									
								</div>
							</div>	
							

							<div class="col-md-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
								<div id="map" class="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.30274075476!2d150.73936541480296!3d-23.131320784898087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bc2e64b2b292661%3A0x528e0404f6472900!2s78%20John%20St%2C%20Yeppoon%20QLD%204703!5e1!3m2!1sen!2sau!4v1629548386101!5m2!1sen!2sau"  width="100%" height="540" style="border-radius: 7px; border:0 ; margin-top: 0%;" allowfullscreen="" loading="lazy"></iframe>
			          			</div>
			          		</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="row">
								

							<div class="col-md-3">
									<div class="dbox w-100 text-center">
							        		<div class="icon d-flex align-items-center justify-content-center" style="background: #3CB371">
							        			<span class="fa fa-phone"></span>
							        		</div>
							        		<div class="text">
								        	    <p><a href="tel://0749398211" style="color: black;"><?php echo get_field('phone'); ?></a></p>
								          </div>
						          </div>
							</div>

							<div class="col-md-3">
									<div class="dbox w-100 text-center">
						        		<div class="icon d-flex align-items-center justify-content-center" style="background: #1E90FF">
						        			<span class="fa fa-facebook"></span>
						        		</div>
						        		<div class="text">
							        	    <p> <a href="https://www.facebook.com/pg/keppelfm/posts/" style="color: black;">Facebook</a></p>
							          </div>
						          </div>
							</div>

							<div class="col-md-3">
								<div class="dbox w-100 text-center">
						        		<div class="icon d-flex align-items-center justify-content-center">
						        			<span class="fa fa-paper-plane"></span>
						        		</div>
						       	   	<div class="text">
							            <p> <a href="mailto:<?php echo get_field('mail_'); ?>" style="color: black;">Email</a></p>
							        </div>
					        	 </div>
							</div>

							<div class="col-md-3">
								<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text">
						            <p> <a href="http://keppelfm.org.au/" style="color: black;"><?php echo get_field('site'); ?></a></p>
					   	          </div>
					          </div>
			   	  		 	</div>
								</div>
								
							</div>
						
			   	  		 <div class="col-md-3"></div>

					</div>

				</div>

			</div>

		</div>

	</section>
	
<?php get_footer(); ?>




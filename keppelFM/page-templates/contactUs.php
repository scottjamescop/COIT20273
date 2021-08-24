<?php
	$name=$_POST['contact-name'];
	$from=$_POST['contact-email'];
	$subject=$_POST['subject'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	

	$to='s.jotangiya@cqumail.com';
	$subject='Contact Us Form';
	$message="Name: ".$name."\n"."Email: ".$email."\n"."Subject: ".$subject."\n"."Phone: ".$phone."Message: ".$message;
	$headers="MIME-VERSION: 1.0"."\r\n";
	$headers .="Content-type:text/html;charset=UTF-8"."\r\n";
	$headers="From : <$from>\r";	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
 <body>

<?php

/*

Template Name: Contact Us Page Template

*/
get_header();
?>
<br> <br>
<section class="ftco-section">
		<div class="container-fluid">
			
			<div class="row justify-content-center">

				<div class="col-md-12">

					<div class="wrapper">

						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Contact Us</h3>
									
				      		<!--
									<form method="post" action="" class="contactForm" novalidate> 
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="contact-name">Full Name</label>
													<input type="text" class="form-control" name="contact-name" id="contact-name" placeholder="Name" required>
													 <div class="invalid-feedback">
												        Please add your Name.
												     </div>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="contact-email">Email Address</label>
													<input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="Email" required>
													<div class="invalid-feedback">
												        Please add your Email.
												     </div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
													<div class="invalid-feedback">
												        Please add your Subject.
												     </div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="phone">Phone</label>
													<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" pattern="[0-9]{10}" required>
													<div class="invalid-feedback">
												        Please add your Phone.
												     </div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="message">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
													<div class="invalid-feedback">
												        Please add your Message
												     </div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group1">
													<button type="submit" name="submit" class="btn btn-primary"><?php echo get_field('send_button'); ?></button>
											    </div>
											</div>
											<?php 
												if(isset($_POST['submit']))
												{
													
													if(mail($to, $subject, $message,$headers))
													{
														echo "Thanks for contacting us. We will get back to you shortly";
													}
													else
													{
														echo "Sorry, something went wrong";
													}
												}
											?>
										</div>
									</form>
								-->

								<?php echo do_shortcode('[contact-form-7 id="91" title="Untitled"]'); ?>
								</div>
							</div>	
							

							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map" class="container-fluid">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.30274075476!2d150.73936541480296!3d-23.131320784898087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bc2e64b2b292661%3A0x528e0404f6472900!2s78%20John%20St%2C%20Yeppoon%20QLD%204703!5e1!3m2!1sen!2sau!4v1629548386101!5m2!1sen!2sau"  width="100%" height="540" style="border:0 ; margin-top: 0%;" allowfullscreen="" loading="lazy"></iframe>
			          			</div>
							</div>
						</div>


						<div class="row">

							<div class="col-md-4">
									<div class="dbox w-100 text-center">
				        				<div class="icon d-flex align-items-center justify-content-center">
				        					<span class="fa fa-map-marker"></span>
				        			    </div>
				        				<div class="text">
					           			 <p><span>Address:</span> 78 John Street (PO Box 346) Yeppoon,Queensland 4703</p>
					          			</div>
				         		  </div>
							</div>

							<div class="col-md-2">
									<div class="dbox w-100 text-center">
							        		<div class="icon d-flex align-items-center justify-content-center" style="background: #3CB371">
							        			<span class="fa fa-phone"></span>
							        		</div>
							        		<div class="text">
								        	    <p><span>Phone:</span> <a href="tel://0749398211" style="color: black;">(07) 4939 8211</a></p>
								          </div>
						          </div>
							</div>

							<div class="col-md-2">
									<div class="dbox w-100 text-center">
						        		<div class="icon d-flex align-items-center justify-content-center" style="background: #1E90FF">
						        			<span class="fa fa-facebook"></span>
						        		</div>
						        		<div class="text">
							        	    <p> <a href="https://www.facebook.com/pg/keppelfm/posts/" style="color: black;">Facebook</a></p>
							          </div>
						          </div>
							</div>

							<div class="col-md-2">
								<div class="dbox w-100 text-center">
						        		<div class="icon d-flex align-items-center justify-content-center">
						        			<span class="fa fa-paper-plane"></span>
						        		</div>
						       	   	<div class="text">
							            <p><span>Email:</span> <a href="mailto:s.jotangiya@cqumail.com" style="color: black;">Test@hotmail.com</a></p>
							        </div>
					        	 </div>
							</div>

							<div class="col-md-2">
								<div class="dbox w-100 text-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text">
						            <p><span>Website</span> <a href="http://keppelfm.local/" style="color: black;">keppelfm.org.au</a></p>
					   	          </div>
					          </div>
			   	  		 </div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>
	
<?php get_footer(); ?>


    </body>
</html>
<?php
/* Template Name: Contact Us */
get_header(); ?>


<?php

/*

Template Name: Sponsorship Page test Template

*/
get_header();
?>
<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('259');?>'); background-repeat: no-repeat; background-size: cover; background-position: center bottom;">
	<div class="overlay">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<h1>Sponsorships</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<?php echo do_shortcode('[contact-form-7 id="420" title="Sponsorship"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
	<div class="row padt40 padb40">
		<div class="col-12 col-lg-6">
			<?php echo get_field('intro_text'); ?>
		</div>
		<div class="col-12 col-lg-4 offset-lg-1">
			<div class="heroCircle d-none d-md-block" style="height: 100%; border-radius: 10px; box-shadow: 2px 2px 6px #333; ;background-image: url(<?php echo get_field('intro_image'); ?>); background-position: top right; background-size: cover;">				
					</div>
		</div>
	</div>
</div>

<div class="container pcParent" style="margin-top:40px;">
	<div class="row">
		<div class="col-12">
			<?php echo get_field('pricing_table'); ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row padt40 padb40">
		<div class="col-12">
			<?php echo get_field('audience_text'); ?>
		</div>
	</div>
</div>
<section style="background-image: linear-gradient(to left top, #000000, #3b0e1a, #720621, #a9001d, #dc0000); color:#fff;">
<div class="container">
	<div class="row padt40 padb40 checkedUls">
		<?php echo get_field('sponsorship_perks'); ?>
	</div>
</div>
</section>
<div class="container">
	<div class="row padt40 padb40">
		<?php echo get_field('sponsorship_benefits'); ?>
		

		

		
	</div>
</div>


<?php get_footer(); ?>
<?php

/*

Template Name: Event Page Template

*/
get_header();
?>

<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('334');?>'); background-repeat: no-repeat; background-size: cover; background-position: center bottom;">
	<div class="overlay">
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<h1>Events</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<section>
<div class="container">
	<?php while( have_rows('events_repeater') ) : the_row();

        // Load sub field value.
        $pictureSource = get_sub_field('event_picture');
        $eventDetails = get_sub_field('music_events');
        ?>
        <div class="row padt40 padb40">
			<div class="col-12 col-lg-6">
				<div style="background-image: url(<?php echo $pictureSource; ?>); background-position: center center; background-size: cover;" class="musicEventImage">
					
				</div>
			</div>
			<div class="col-12 col-lg-6 padt40 padb40">
				<?php echo $eventDetails; ?>
			</div>
		</div>

       
	<?php 
    // End loop.
    endwhile;
    ?>


</div>
</section>





<?php get_footer(); ?>

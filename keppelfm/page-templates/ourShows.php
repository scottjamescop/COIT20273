	<?php

	/*

	Template Name: Our Shows Page Template

	*/
	?>
	

<?php 
get_header();
?>
<section>
	<!-- top image header -->
	<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('259');?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<div class="overlay">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
						<h1><?php the_title() ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Start of Highlights Promotion Section -->	
<section style="background-image: url(<?php echo wp_get_attachment_image_src(309, "full")[0]; ?>); background-position: top right; background-size: contain; background-repeat: no-repeat;">
	<div class="container">
		<div class="row dfpromotionRow">
			<div class="col-lg-5 dfsquareContainer">
				<div class="tr Square" style="background-image: url(<?php echo get_field('first_section_image'); ?>); background-position: center center; background-size: cover;">

				</div>
				<div class="bl Square">

				</div>
			</div>
			<div class="col-lg-1">
			</div>
			<div class="col-lg-6 dfpromotionCol">
				<div class="dfcontentBlock">
					<h3><?php echo get_field('promotion_header'); ?></h3>
					<p> <?php echo get_field('promotion_text'); ?> </p>
					<a href="<?php echo get_field('promotion_button_link'); ?>"><button class="primary dffullWidth"><?php echo get_field('promotion_button_text') ?></button></a>
				</div>
			</div>
		</div>
	</div>
</section>



<!-- Start of the Ourshows Grid -->
<section>
	<div class="container">
		<div class="row" style= "margin: 50px 0;">

			<?php
			/*Check rows exists.*/

			if( have_rows('shows') ):?>

				<div class="col-12"> 
					<h1 style="text-align:center; padding:20px 0; "><?php the_title(); ?> </h1>
				</div>

				<div class="dffeatures-inner" style="padding-bottom: 0;">
					<?php
					/*Loop through rows.*/
					while( have_rows('shows') ) : the_row();
						?>

						<div class="col-md-12 col-md-4" style="padding: 10px 10px;">
							<?php 
							$slide_photo = get_sub_field('show_image');
							?>	
							<img src="<?php echo $slide_photo['url']; ?>" class="dfimg" alt="<?php echo $slide_photo['alt']; ?>" />
							<h3 class="dfblueHeading"><?php
							echo $show_title = get_sub_field('show_title');?> </h3>
							<p><?php echo wp_trim_words(get_sub_field('show_description'),90);?> </p>
						</div>
						<?php
					endwhile;

					/* No value.*/
				else :
					/* Do something...*/
				endif;
				?>
			</div>
		</div>
	</div>
</section>




<!-- start of Timetable section -->
<section>
	<h2 style="text-align: center;">Timetable</h2>
	<div class="container-fluid TimetableContainer" style="padding-bottom: 20px;">
		<div class="row">
			<div class="col-lg-12">
				<?php
				$table = get_field( 'timetable' );

				if ( ! empty ( $table ) ) {
					echo '<table id="showsTable">';

					if ( ! empty( $table['header'] ) ) {
						echo '<thead>';
						echo '<tr>';
						foreach ( $table['header'] as $th ) {
							echo '<th>';
							echo $th['c'];
							echo '</th>';
						}
						echo '</tr>';
						echo '</thead>';
					}
					echo '<tbody>';
					foreach ( $table['body'] as $tr ) {
						echo '<tr>';
						foreach ( $tr as $td ) {
							echo '<td>';
							echo $td['c'];
							echo '</td>';
						}
						echo '</tr>';
					}
					echo '</tbody>';
					echo '</table>';
				} ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>


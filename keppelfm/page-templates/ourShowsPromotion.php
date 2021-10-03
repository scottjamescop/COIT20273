	<?php

	/*

	Template Name: Our Shows Promotion Template

	*/
	?>

	


<?php 
get_header();
?>
<section>
	<!-- very top image in header -->
	<div class="subHero" style="background-image: url('<?php echo wp_get_attachment_url('259');?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
		<div class="overlay">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12">
						<h1><?php the_title();?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>






<!-- nav elements -->
<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 
    ?>

    <!-- start of Highlights Promotion Section -->  
    <section style="background-image: url(<?php echo wp_get_attachment_image_src(309, "full")[0]; ?>); background-position: top right; background-size: contain; background-repeat: no-repeat;"> 
     <div class="dfcontainer dfcontainer--narrow dfpage-section">
       <?php
       $theParent = wp_get_post_parent_id(get_the_ID());
       if($theParent)
        { ?>
          <div class="dfmetabox dfmetabox--position-up dfmetabox--with-home-link">
           <p>
            <a class="dfmetabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="dfmetabox__main"><?php the_title() ?></span>
          </p>
        </div>
      <?php }

      ?>



      <?php 

      //Test to see if page is a parent
      $testArray = get_pages(array(
        'child_of'=> get_the_ID()
      ));

    //evaluate and RUN if currently on child page OR if on a parent page.
      if ($theParent or $testArray)
        { ?>

          <div class="dfpage-links">
            <h2 class="dfpage-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
            <ul class="dfmin-list">
              <?php



              if($theParent) {
                $findChildrenOf = $theParent;
              }
              else {
                $findChildrenOf = get_the_ID();
              }

              wp_list_pages(array(
                'title_li' => NULL,
                'child_of' => $findChildrenOf,
                'sort_column' => 'menu_order'

              ));

              ?>
            </ul>
          </div>

        <?php } ?>

        <div class="dfgeneric-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>



    <!-- start of Highlights Promotion Section 2 -->  
    <section>
      <div class="container">
        <div class="row dfpromotionRow" style="margin-top: 40px;">
          <div class="col-lg-5 dfsquareContainer">
            <div class="tr Square" style="background-image: url(<?php echo get_field('promotion_image'); ?>); background-position: center center; background-size: cover;">

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
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php

  } // end while
} // end if

?>

<hr>


<!-- Timetable Section -->
<?php 

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 

    ?>

    <h2 style="text-align: center;"><?php echo get_field('timetable_title'); ?></h2>
    <div class="container-fluid TimetableContainer" style="padding-bottom: 20px;">
     <div class="row">
      <div class="col-lg-12">

       <?php 
       $table = get_field( 'timetableOurShows', 'options' );

       if ( ! empty ( $table ) ) {
        echo '<table id="showsTablePromo">';

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
  } 

  ?>

</div>
</div>
</div>

<?php

  } // end while
} // end if



get_footer(); 

?>













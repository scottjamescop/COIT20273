  <?php

  /*

  Template Name: timetable.php

  */
  ?>
<head>

    <style>
    .TimetableContainer{
      overflow-x: scroll;
      padding: 40px;
    }

  </style>
</head>

<section>
  <h1 style="text-align: center;">Upcoming Events</h1>
  <div class="container-fluid TimetableContainer">
   <div class="row">
    <div class="col-lg-12">
     <?php
     $table = get_field( 'timetableOurShows' );

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
} ?>
</div>
</div>
</div>
</section>

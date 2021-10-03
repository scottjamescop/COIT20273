$('.minifier').on('click',function(){
	$('.audioPlayer').toggleClass('minified');
	$('.playerExpand').toggleClass('show');
});

$('.playerExpand').on('click',function(){
	$('.audioPlayer').toggleClass('minified');
	$('.playerExpand').toggleClass('show');
});

//Our Shows Timetable to resize for today.
function dayOfWeek() {
  var d = new Date();
  d.setDate(d.getDate()-1);
  var n = d.getDay() +1;
  return n;
  //document.getElementById("demo").innerHTML = n;
}


$( document ).ready(function() {
    //console.log( dayOfWeek() );
    var dow = dayOfWeek();
    // for each tr in shows table, add "show-mobile" class to first td as well as td in dayOfWeek() index
    $( "#showsTable tr" ).each(function( index ) {
    	$( this ).find( "td:eq(0)" ).addClass( "mobileShow, col-data-time" );
	  $( this ).find( "td:eq("+dow+")" ).addClass( "mobileShow, col-data-day" );
	});
	$( "#showsTable tr" ).each(function( index ) {
    	$( this ).find( "th:eq(0)" ).addClass( "mobileShow, col-item-time" );
	  $( this ).find( "th:eq("+dow+")" ).addClass( "mobileShow, col-item-day" );
	});
});
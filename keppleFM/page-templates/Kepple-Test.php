<?php
/**
 *
 * Template Name: Page TEST
 *
 */

 ?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>	
		<style>
			.banner {
			  position: relative;
			  overflow: hidden;
			  height: 55vh;
			  box-shadow: 0px 3px 6px #333;
			}
			body{
				overflow-x: hidden; 
				font-family: 'Roboto', sans-serif;

			}
			p{
				font-family: 'Roboto', sans-serif;
			}
			.banner__video {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  width: auto;
			  min-width: 100%;
			  height: auto;
			  min-height: 100%;
			  transform: translateX(-50%) translateY(-50%);
			  z-index: -1;
			}
			.searchRow{
				position: absolute;
				top: 55%;
				left: 55%;
				transform: translate(-50%, -50%);
				width: 65vw;
			}
			h1, h2, h3{
				font-family: 'Alegreya Sans SC', sans-serif;

			}
			input{
				border-radius: 0 !important;
			}
			.footerOne h6, .footerOne h5{
				font-family: 'Alegreya Sans SC', sans-serif;
				margin: 5px 0 5px 0 ;
				font-size: .9rem;
			}
			.footerOne{
				font-size: .8rem;
			}
			h1{
				position: absolute;
				top: 30%;
				left: 50%;
				transform: translate(-50%, -0%);
				color: #fff;
				font-size: 2.75rem;
				text-shadow: 0px 0px 2px #333;
			}
			h2{
				font-size: 2.25rem;
			}
			.utilNav{
				width: 100vw;
				position: relative;
				top: 0;
				left: 0;
				height: 26px;
				background: #000;
			}
			.logoWrapper{
				background: #34ac49;
				height: 80px;
				position: absolute;
				top: 0;
				left: 200px;
				padding: 10px 15px;
				box-shadow: 2px 2px 16px #000;
			}
			.utilMenu{
				position: absolute;
				right: 200px;
				color: #fff;
				top: 50%;
				transform: translateY(-50%);
			}
			.utilMenu.left{
				left: 20% !important;
			}
			.banner input, .banner select {
				border-radius: 0;
				border: none !important;
				box-shadow: 0px 0px 8px #444;
				transition: all .35s !important;
				height: 50px;
			}
			select:focus{
				border: none !important;
				box-shadow: 0px 0px 16px #444;
			}
			select > option{
				height: 40px !important;
				padding: 10px 15px !important;
			}
			.searchButton{
				background: #34ac49;
				color: #fff;
				padding: 9px 35px;
				border-radius: 0 !important;
				box-shadow: 0px 0px 8px #444;
				transition: .35s all;
				height: 50px;
			}
			.searchButton:hover{
				transform: translateY(-2px);
			}
			.searchCard{
				width: 100%;
				height: auto;
				background: #fff;
				padding: 10px;
				margin-bottom: 25px;
				box-shadow: 2px 2px 6px #333;
			}
			.contentBox{
				padding: 10px 15px;
				background: #fff;
			}
			#jSidebar{
				position: absolute;
				top: 50px;
				left: 20px;
				padding: 15px 25px;
				background: #fff;
				box-shadow: 2px 2px 6px #333;
			}
			hr{
				margin: 10px 0 15px 0;
				border-top: 1px !important;
				border-color: #333;
				height: 1px;
				background-image: linear-gradient(to right, #dddddd, #d6d6d6, #d0d0d0, #c9c9c9, #c3c3c3, #c3c3c3, #c3c3c3, #c3c3c3, #c9c9c9, #d0d0d0, #d6d6d6, #dddddd);
			}
			#jSidebar .searchButton{
				padding: 10px 15px;
				box-shadow: none;
				height: auto !important;
			}
			#jSidebar input[type="text"]{
				margin: 0;
			}
			.janteHero{
				height: 110px;
				width: 100%;
				background: url(http://www.mileswebservices.com/wp-content/uploads/2019/07/header_wheels.png) no-repeat center 28px,
                linear-gradient(to bottom, #34ac49 0%, #092f1b 100%)
			}
			.posRel{
				position: relative;
			}
			.navBar{
				background: #000;
				width: 100%;
				height: 42px;
				color: #fff;
				text-transform: uppercase;
				font-family: 'Alegreya Sans SC', sans-serif;
				position: relative;
				font-size: 16px;
				font-weight: 600;
			}
			.navBar .wrapper{
				font-weight: 300;
				text-transform: none;
				transition: .35s all;
			}
			.navBar .wrapper:hover{
				background-color: #777 !important;
				cursor: pointer;
			}
			.wheelRow{
				height: 275px;
			}
			.wheelRow img{
				height: 234px;
				width: auto;
				float: left;
				position: absolute;
				margin-top: 20px;
				z-index: -1;
			}
			.wheelContent{
				float: right;
				width: 37%;
				padding-top: 20px;
			}
			.banner-green{
				text-transform: uppercase;
			    color: #34ac49;
			    font-size: 1.6em;
			    margin-top: 20px;
    			margin-bottom: 10px;
    			font-weight: 600;
			}
			.footerOne{
				background: #000;
				color: #fff;
				padding: 20px 0;
			}
			.bottomBar{
			    padding: 12px;
    			line-height: 12px;
    			background-color: #092f1b;
    			color: #FFF;
    			font-size: 11px;
    			width: 100%;
    		}
    		.row.spec{
    			width:1170px !important; max-width: none !important;
    		}
		</style>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<div class="utilNav">
				<div class="utilMenu left">
					Welcome, Jack
				</div>
				<div class="utilMenu">
					Cart &nbsp;&nbsp;&nbsp;&nbsp; Orders &nbsp;&nbsp;&nbsp;&nbsp; Admin &nbsp;&nbsp;&nbsp;&nbsp; Log Out
				</div>
			</div>
			<div class="janteHero">
				<div class="row" style="width:1170px !important; max-width: none !important;">
					<div class="small-6 columns posRel">
						<img src="http://www.mileswebservices.com/wp-content/uploads/2019/07/jante_logo_white.png" style="max-height: 70px; margin-top: 20px;" />
					</div>
					<div class="small-6 columns text-right" style="    font-family: Hind, helvetica, arial, sans-serif !important;
    color: #FFFFFF;
    margin: 20px 0 10px;
    text-align: right; font-size: 30px;">
						<b>Quality. Delivery. Price.</b>
					</div>
				</div>
			</div>
			<div class="navBar">
				<div class="row" style="width:1170px !important; max-width: none !important;">
					<div class="small-8 columns" style="padding-top: 11px;">
						Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Request Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About Us
					</div>
					<div class="small-4 columns posRel text-right">
						<input style="float:right; position: absolute; margin-top: 6px; height: 30px;" type="text" placeholder="Search Parts..." /><div class="wrapper" style="position: absolute; z-index: 33; right: -15px; background-color: #34ac49; height: 30px; margin-top: 6px; padding: 5px 10px; ">Search</div>
					</div>
				</div>
			</div>
<div class="banner">
  <video autoplay loop muted class="banner__video" poster="video.jpg">
    <source src="http://www.mileswebservices.com/wp-content/uploads/2019/07/carsE.mp4" type="video/mp4">
  </video>
  <h1>Radio Player</h1>
  <div class="row expanded searchRow">
  		
  	<div class="small-3 columns">
  		<select>
  			<option disabled selected="true">Year</option>
  			<option>2019</option>
  		</select>
  	</div>
  	<div class="small-3 columns">
  		<select>
  			<option disabled selected="true">Make</option>
  		</select>
  	</div>
  	<div class="small-3 columns">
  		<select>
  			<option disabled selected="true">Model</option>
  		</select>
  	</div>
  	<div class="small-3 columns">
  		<a href="http://www.mileswebservices.com/jante/jante-sub/"><button class="searchButton">Search</button></a>
  	</div>
  </div>
</div>
<section>
	<div class="row spec wheelRow" style="width:1170px !important; max-width: none !important;">
		<div class="small-4 columns posRel">
			<img src="http://www.mileswebservices.com/wp-content/uploads/2019/07/wheel1.png" />
			<div class="wheelContent">
				<h3 class="banner-green">Quality</h3>
				<p style="font-size: 14px;">Our Replacement wheels match or out perform the originals</p>
			</div>
		</div>
		<div class="small-4 columns posRel">
			<img src="http://www.mileswebservices.com/wp-content/uploads/2019/07/wheel2.png" />
			<div class="wheelContent">
				<h3 class="banner-green">Delivery</h3>
				<p style="font-size: 14px;">Our wholesale distribution network is available 5 days a week.</p>
			</div>
		</div>
		<div class="small-4 columns posRel">
			<img src="http://www.mileswebservices.com/wp-content/uploads/2019/07/wheel3.png" />
			<div class="wheelContent">
				<h3 class="banner-green">Price</h3>
				<p style="font-size: 14px;">Our wheels are often a fraction of the OEM costs.</p>
			</div>
		</div>
	</div>
</section>

</div>
<footer>
	<div class="footerOne">
		<div class="row spec">
			<div class="small-4 columns">
				<h5><b>JANTE IS WHOLESALE</b></h5>
				Jante Wheels are sold only through a network of authorized retail or wholesale distributors. To find an authorized distributor in your area or become one, please email info@jantewheel.com.
			</div>
			<div class="small-4 columns">
				<h5><b>HOURS</b></h5>
				Monday - Friday 8:30 AM to 5:30 PM EST<br />
				We are unavailable New Year's Day, Independence Day, Labor Day, Thanksgiving, and Christmas.
			</div>
			<div class="small-4 columns">
				<h5><b>CONTACT US</b></h5>
				info@jantewheel.com<br />

				p: (877) 269-3586<br />

				f: (570) 884-7319
			</div>

		</div>

	</div>
	<div class="bottomBar">
		<div class="row spec">
			<div class="small-12 columns">
				Copyright 2016 © Jante Wheel, Inc. | Privacy Policy
			</div>
		</div>
	</div>
</footer>
</div>
</body>
</html>

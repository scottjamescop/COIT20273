<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KeppelFM
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC&family=Montserrat:wght@300&display=swap" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<header id="header" role="banner" class="darkHeader">				
				<div class="row expanded sameheight-nav-wrap text-right">
			    	<div class="columns col-sm-10 col-lg-3 sameheight-nav">
			        	<div id="logoContainer">
							<a href="/">
								<img src="<?php echo wp_get_attachment_url(36); ?>" />
								<div class="logoText">
								</div>
							</a>
						</div>
			        </div>
			        <div class="columns col-sm-2 col-lg-9 sameheight-nav menu-container test-right">
			        	<nav id="menu" role="navigation">
							<div class="navContainer">
								<div class='navTemplateControl'>
									<div class='menuButton'>
										<div class='line1'></div>
										<div class='line2'></div>
										<div class='line3'></div>
									</div>
								</div>
								<!-- Remove "styleSubArrows" to get rid of subNav arrows  -->
								<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'navTemplate' ) ); ?>
							</div>
						</nav>
					</div>
				</div>
			</header>

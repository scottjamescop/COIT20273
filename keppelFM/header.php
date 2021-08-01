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
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper" class="hfeed">
			<header id="header" role="banner" class="">
				<div id="logoContainer">
					<a href="/">
						<div class="logoText"> Hello World</div>
					</a>
				</div>
				<div class="row expanded collapse sameheight-nav-wrap text-right">
			    	<div class="columns small-10 large-3 sameheight-nav">
			        	
			        </div>
			        <div class="columns small-2 large-9 sameheight-nav menu-container">
			        	<nav id="menu" role="navigation">
							<div class="navContainer">
								<div class='navTemplateControl'>
									<div class='menuButton'>
										<div class='line1'></div>
										<div class='line2'></div>
										<div class='line3'></div>
									</div>
								</div>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
											'menu_class' => 'navTemplate',
										)
									);
								?>
							</div>
						</nav>
					</div>
				</div>
			</header>

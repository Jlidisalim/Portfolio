<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Web Agency Elementor
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>
<?php if(get_theme_mod('web_agency_elementor_preloader_hide','')){ ?>
	<div class="loader">
		<div class="preloader">
	    <div class="diamond">
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
		</div>
	</div>
<?php } ?>
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'web-agency-elementor' ); ?></a>

<header id="site-navigation" class="header text-center text-md-start py-2 <?php if( get_theme_mod( 'web_agency_elementor_sticky_header',false) != '') { ?>sticky-header<?php } else { ?>close-sticky <?php } ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
				<div class="logo text-center text-lg-start mb-3 mb-lg-0">
		    		<div class="logo-image">
		    			<?php the_custom_logo(); ?>
			    	</div>
					<?php
						if ( get_theme_mod('web_agency_elementor_display_header_title', true) == true ) :
							echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
							echo esc_attr(get_bloginfo('name'));
							echo '</a>';
						endif;
						if ( get_theme_mod('web_agency_elementor_display_header_text', false) == true ) :
							echo '<span>'. esc_attr(get_bloginfo('description')) . '</span>';
						endif;
					?>
				</div>
		   	</div>
		   	<div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
				<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
					<span aria-hidden="true"><?php esc_html_e( 'Menu', 'web-agency-elementor' ); ?></span>
				</button>
				<nav id="main-menu" class="close-panal">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
							'container' => 'false'
						));
					?>
					<button class="close-menu my-2 p-2" type="button">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
				</nav>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-3  align-self-center head-btn text-center text-md-end">
				<?php if ( get_theme_mod('web_agency_elementor_header_button_text') || get_theme_mod('web_agency_elementor_header_button_url') ) : ?>
					<a href="<?php echo esc_url( get_theme_mod('web_agency_elementor_header_button_url' ) ); ?>"><?php echo esc_html( get_theme_mod('web_agency_elementor_header_button_text' ) ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header>

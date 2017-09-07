<?php
/**
 * The sidebar containing the main widget area

 * @package Teaching_Guide
 */
?>

<aside class="grid-3 navigation sidebar">

	<h4>Navigation</h4>

	<?php wp_nav_menu( array(
		'theme_location' 		=> 'MainNav',
		'container'      		=> 'nav',
		'container_class'   => '',
		'menu_class'				=> '',
		'depth'							=> 3
	 )); ?>

	<?php if ( dynamic_sidebar('sidebar-main') ) : elseif( current_user_can( 'edit_theme_options' ) ) : ?>

		<h5><?php _e( 'No widgets found.', 'teaching-guide' ); ?></h5>
		<p><?php printf( __( 'It seems you don\'t have any widgets in your sidebar! Would you like to %s now?', 'fc' ), '<a href=" '. get_admin_url( '', 'widgets.php' ) .' ">populate your sidebar</a>' ); ?></p>

	<?php endif; ?>

</aside>

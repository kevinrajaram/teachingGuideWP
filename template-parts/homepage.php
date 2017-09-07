<?php

/*
 * Template Name: Home Page Template
 */

get_header(); ?>

<div class="row intro-section">
  <div class="container">
    <div class="grid-3"><img src="<?php echo get_template_directory_uri(); ?>/img/provost.png" alt="Provost August"></div>
    <div class="grid-66">
      <h3>Office of Evening and Summer Sessions <span>(Part-time Faculty)</span></h3>
      <p class="f16">
        <strong>Kathy Wilson</strong>, CUNY Administrative Assistant<br>
        <strong>Lana Drepaul</strong>, CUNY Office Assistant
      </p>
      <p class="f16"><strong>Office</strong>: Namm Hall, NG-07 &bull; <strong>Phone</strong>: 718-260-5565 &bull; <strong>Email</strong>: <a href="mailto:evesummersessions@citytech.cuny.edu">evesummersessions@citytech.cuny.edu</a></p>
    </div>
  </div>
</div>

<div class="row">
  <div class="container">
    <ul class="homenav">
      <?php if ( dynamic_sidebar('tg_nav_items') ) : elseif( current_user_can( 'edit_theme_options' ) ) : ?>

      <h5><?php _e( 'No events found.', 'tg' ); ?></h5>
      <p><?php printf( __( 'It seems you don\'t have any widgets in your sidebar! Would you like to %s now?', 'fc' ), '<a href=" '. get_admin_url( '', 'widgets.php' ) .' ">populate your sidebar</a>' ); ?></p>

      <?php endif; ?>
    </ul>
  </div>
</div>

<?php get_footer();

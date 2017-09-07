<?php
/**
 * Template Name: Getting Started
 * @package Teaching_Guide
 */

get_header(); ?>

<div class="row breadcrumbs">
  <div class="container">
    <?php get_post_ancestors( $post ) ?>
    <div class="grid-1"><p><?php if(function_exists('bcn_display')){bcn_display();}?></p></div>
  </div>
</div>

<div class="row content">
  <div class="container">
    <?php get_sidebar(); ?>

    <main class="grid-66 mainContent">
      <h3 class="page-title"><?php the_title();?></h3>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php
get_footer();

<?php
/**
 * Template Name: Getting Started
 * @package Teaching_Guide
 */

get_header(); ?>

<div class="row breadcrumbs">
  <div class="container">
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

      <?php $custom_query = new WP_Query(array( 'category_name' => 'getting-started-2','order' => 'ASC' ));
      while($custom_query->have_posts()) : $custom_query->the_post(); ?>

      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink(); ?>" class="article__title" id="title-<?php the_ID(); ?>"><?php the_title(); ?></a>

      		<?php the_content(); ?>
      </article>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); // reset the query ?>

    </main>
  </div>
</div>

<?php
get_footer();

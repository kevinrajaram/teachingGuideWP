<?php
/**
* Category Template
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
      <h3 class="page-title"><?php single_cat_title(); ?></h3>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink(); ?>" class="article__title" id="title-<?php the_ID(); ?>"><?php the_title(); ?></a>
        <?php the_content(); ?>
      </article>

      <?php endwhile; ?>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php
get_footer();

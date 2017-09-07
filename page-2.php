<?php
/**
 * Template Name: Planning Your Course
 * @package Teaching_Guide
 */

get_header(); ?>

<div class="row breadcrumbs">
  <div class="container">
    <div class="grid-1"><p><?php if(function_exists('bcn_display')){bcn_display();}?></p></div>
  </div>
</div>

<div class="row pageQuote">
  <div class="container">
    <div class="grid-1"><h5>SEEKING CONVERGENCE</h5></div>
    <div class="grid-1 f14 collapseText">
      <p>Which disciplines share a focus on evidence? Which depend on computational thinking? Innovation? Global thinking? Where is compassion an essential value and how is it developed and expressed? Where is competition rewarded?</p>

      <p>As they identify convergences, these faculty members have also been careful to note signature divergences—essential and sometimes uniquely identifying characteristics of their disciplines, professions, or industries. Although disciplinary edges have softened or blurred over the past decades, and interdisciplinary—that most unwieldy word—has become commonplace and necessary, each field of knowledge or practice has grown from a nucleus that defines it.</p>
    </div>
    <div class="grid-1 f14">
      <p class="author"><strong>Bonne August, Provost</strong>
        <span class="issue">December 2009 Nucleus: A Faculty Commons Quarterly Volume 1 – Issue 2</span>
      </p>
    </div>
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

      <?php $custom_query = new WP_Query(array( 'category_name' => 'planning-your-course','order' => 'ASC' ));
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

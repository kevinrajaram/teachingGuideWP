<?php
/**
 * Template Name: Teaching Your Course
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
    <div class="grid-1"><h5>CITY TECH: A LIVING LAB IN ACTION?</h5></div>
    <div class="grid-1 f14 collapseText">
      <p>The Living Lab…represents a vision of City Tech itself, if not yet fully in reality, then certainly in possibility. As a student in the City Tech of possibility, as in the lab:</p>
      <ul>
        <li>You start with questions.</li>
        <li>You collaborate with a team and have a role and responsibilities.</li>
        <li>You analyze evidence.</li>
        <li>You keep a record of your work and reflect on it.</li>
        <li>Through your observations of the concrete, you deepen and complicate your understanding of theory.</li>
        <li>Your understanding of theory makes possible real world applications.</li>
        <li>You know there is more than one way to solve a problem. And often more than one right answer.</li>
        <li>You expect change.</li>
        <li>You make room for serendipity.</li>
        <li>You get to make mistakes and see their consequences.</li>
        <li>You get to try again. And again.</li>
        <li>You work to connect the disparate pieces that you experience into a meaningful, protean whole.</li>
      </ul>
    </div>
    <div class="grid-1 f14">
      <p class="author"><strong>Bonne August, Provost</strong>
        <span class="issue">September 2011 Nucleus: A Faculty Commons Quarterly Volume 3 – Issue 1</span>
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

      <?php $custom_query = new WP_Query(array( 'category_name' => 'teaching-your-course','order' => 'ASC' ));
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

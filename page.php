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

<div class="row pageQuote">
  <div class="container">
    <div class="grid-1"><h5>PLACE-BASED NOT PLACE-BOUND</h5></div>
    <div class="grid-1 f14 collapseText">
      <p>Situated in our vibrant Brooklyn waterfront community at the heart of New York City and the mouth of its great harbor, education at City Tech is place-based but not place-bound. Our faculty and students, representing many origins and dozens of languages, bring the world to us, face to face, every day. At the same time, the disciplines they study, the professions and creative arts they practice, and the ever-growing battery of high-tech tools they employ enable and foster explorations and connections that are truly global.</p>

      <p>Just because we are face to face, does that mean I see you as you are, or that you see me? How does a diverse collection of people become a diverse community of learners? How do we provide all students who have talent and interest with the opportunity to master the tools of science? And, finally, the questions Paul King asks: amid the social complexities and the plethora of new tools, what is an effective teacher? How does a teacher engage and nurture students, one by one?</p>
    </div>
    <div class="grid-1 f14">
      <p class="author"><strong>Bonne August, Provost</strong>
        <span class="issue">March 2011 Nucleus: A Faculty Commons Quarterly Volume 2 – Issue 3</span>
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

      <?php $custom_query = new WP_Query(array( 'category_name' => 'getting-started','order' => 'ASC' ));
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

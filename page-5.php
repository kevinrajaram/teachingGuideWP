<?php
/**
 * Template Name: Supporting Students
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
    <div class="grid-1"><h5>THE WORK MATTERS</h5></div>
    <div class="grid-1 f14 collapseText">
      <p>"In my country, only children of the rich could touch such old things."<br>This is just one example of how the signature City Tech approach to education that melds theory with hands-on experience, long familiar to students in their science, technology, design, and professional studies courses, is becoming a more frequent experience for students in liberal arts courses, as well. By using artifacts and real world problems and case studies, connecting courses across disciplines into learning communities, and composing teams that link students in liberal arts courses to colleagues in technology and design, professors are designing experiences that make learning not merely active but real.</p>

      <p>Real learning, real work, depends not only on materials however, but also on understanding, skill, and technique, which are the products of practice or repetitive use. Comprehension, apprehension, and prehension all spring from the Latin root prehendere, to seize or grasp. And although the moment of apprehension is often described as a light bulb switching on or a thunderclap, these dramatic illuminations more often announce the moment that one becomes conscious of understanding, a moment that may come only after long and repeated effort, as the result of many attempts, and as Richard Sennett, describes in his wise and powerful book, The Craftsman, after purposefully "dwell[ing] in error."</p>

      <p>Hands-on learning in any discipline is mindful, reflective learning that uses our attempts, successful or not, to advance our development of understanding or skill. What motivates us to persist in spite of repeated mistakes is—when it’s not sheer stubbornness—conviction that it matters. Precision matters. Skill matters. The work matters.<br>If this is true of learning, it is equally true of teaching. It is all hands-on work.<br><em>i</em> New Haven and London: Yale UP (2008): 161</p>
    </div>
    <div class="grid-1 f14">
      <p class="author"><strong>Bonne August, Provost</strong>
        <span class="issue">December 2011 Nucleus: A Faculty Commons Quarterly Volume 3 – Issue 2</span>
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

      <?php $custom_query = new WP_Query(array( 'category_name' => 'supporting-students-to-succeed','order' => 'ASC' ));
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

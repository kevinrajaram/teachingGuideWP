<?php
/**
 * Template Name: Designing Assignments
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
    <div class="grid-1"><h5>REFLECTIONS ON ASSESSMENT</h5></div>
    <div class="grid-1 f14 collapseText">
      <p>Good teaching requires leaps of imagination. The professor, with expert knowledge and skills, must imagine what the novice perceives, understands, and feels. Although there may be well-defined stages or steps in learning, each novice engages the learning uniquely. Teaching is about knowing the material, knowing the students, and designing experiences to enable those students to master the material or acquire the skills.</p>
      <p>Done well, assessment can illuminate the process. Assessment is often spoken of as formative, which is done during instruction to improve the process, or summative, the final evaluation that tells us how much the student has learned and how well we have taught. Good formative assessment helps us—and in many cases, the students—to see what is happening and enables us to advance the learning. Good summative assessment points up where it might be most productive to consider making changes or improvements in our approach.</p>
    </div>
    <div class="grid-1 f14">
      <p class="author"><strong>Bonne August, Provost</strong>
        <span class="issue">March 2010 Nucleus: A Faculty Commons Quarterly Volume 1 – Issue 3</span>
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

      <?php $custom_query = new WP_Query(array( 'category_name' => 'designing-assignments-exams','order' => 'ASC' ));
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

<?php get_header(); ?>

<div id="pageContent">
   <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
   <?php endwhile; else :?>
      <p>Sorry, no post or page content to display.</p>
   <?php endif; ?>
</div>

<?php get_footer(); ?>

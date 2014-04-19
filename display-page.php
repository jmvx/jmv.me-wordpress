<!-- Display Page content if there are any -->
<? if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <p><? the_content('Read more...')?></p>
<? endwhile; else: ?>
  <p><? _e('Sorry, no posts matched your criteria.'); ?></p>
<? endif; ?>
<!-- Display Posts if there are any -->
<? if (have_posts()) : while( have_posts() ) : the_post(); ?>
  <div class="single-post">
    <h1 class="post-title">
      <a href="<? echo get_permalink(); ?>"><? the_title(); ?></a> 
      <span class="post-timestamp">Posted on <?php the_time('F j, Y') ?></span>     </h1>
    <p><? the_content('Read more...')?></p>
    <p>Topics: <? the_category(', '); ?></p>
  </div>
<? endwhile; else: ?>
  <p><? _e('Sorry, no posts matched your criteria.'); ?></p>
<? endif; ?>
<div class="nav">
  <?php posts_nav_link(); ?>
</div>
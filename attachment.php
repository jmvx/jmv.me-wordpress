<?php get_header(); ?>

<div id="main"> <!-- main div contains content and sidebar -->
  <div id="content">
    <h1><? the_title(); ?></h1>
    
    <? if (have_posts()) : while( have_posts() ) : the_post(); ?>
      <p>
        <?php if (wp_attachment_is_image($post->id)) {
				$att_image = wp_get_attachment_image_src( $post->id, "medium");?>
				<p class="attachment">
					<a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>">
				<img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>" class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
					</a>
				</p>
				<?php } ?></p>
    <? endwhile; else: ?>
      <p><? _e('Sorry, no posts matched your criteria.'); ?></p>
    <? endif; ?>
        
    <? include('display-page.php'); ?>
    
  </div> <!-- end content div -->
  
  <? get_sidebar(); ?>
  
</div> <!-- end main div -->

<!-- separates main area and sidebar from footer -->
<div id="delimeter">
</div>

<? get_footer(); ?>
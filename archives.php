<? /* Template Name: Archives */ ?>

<?php get_header(); ?>

<div id="main"> <!-- main div contains content and sidebar -->
  <div id="content">
    
    <h1><? the_title(); ?></h1>
    
    <div id="archive-list">
      <? wp_get_archives('type=monthly'); ?>
    </div>
  </div> <!-- end content div -->
  
  <? get_sidebar(); ?>
  
</div> <!-- end main div -->

<!-- separates main area and sidebar from footer -->
<div id="delimeter">
</div>

<? get_footer(); ?>
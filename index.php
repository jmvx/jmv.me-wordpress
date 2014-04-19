<?php get_header(); ?>

<div id="main"> <!-- main div contains content and sidebar -->
  <div id="content">
   
    <?php if ( is_category() || is_archive() ) {
      include('display-excerpts.php');
    } else {
      include('display-posts.php');
    } ?>     
    
  </div> <!-- end content div -->
  
  <? get_sidebar(); ?>
  
</div> <!-- end main div -->

<!-- separates main area and sidebar from footer -->
<div id="delimeter">
</div>

<? get_footer(); ?>
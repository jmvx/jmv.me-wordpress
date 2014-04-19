<? /* Template Name: Page */ ?>

<!--
Template for pages. Displays page content without dates or timestamps.
-->

<?php get_header(); ?>

<div id="main"> <!-- main div contains content and sidebar -->
  <div id="content">
    
    <h1><? the_title(); ?></h1>
    
    <? include('display-page.php'); ?>
    
  </div> <!-- end content div -->
  
  <? get_sidebar(); ?>
  
</div> <!-- end main div -->

<!-- separates main area and sidebar from footer -->
<div id="delimeter">
</div>

<? get_footer(); ?>
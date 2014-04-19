<? /* Template Name: Posts */ ?>

<!--
Template for Post page.
-->

<?php get_header(); ?>

<div id="main"> <!-- main div contains content and sidebar -->
  <div id="content">

    <? include('display-posts.php'); ?>
    
  </div> <!-- end content div -->
  
  <? get_sidebar(); ?>
  
</div> <!-- end main div -->

<!-- separates main area and sidebar from footer -->
<div id="delimiter">
</div>

<? get_footer(); ?>
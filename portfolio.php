<? /* Template Name: Portfolio */ ?>

<!--
Template for displaying my portfolio
-->

<?php get_header(); ?>

<div id="main"> <!-- main div contains content and sidebar -->
  <div id="content">
    
    <h1><? the_title(); ?></h1>
    <? include('display-portfolio.php'); ?>
    
  </div> <!-- end content div -->
  
  <? get_sidebar(); ?>
  
</div> <!-- end main div -->

<!-- separates main area and sidebar from footer -->
<div id="delimeter">
</div>

<? get_footer(); ?>
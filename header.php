<html>
  <head>
    
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
    
    
    <title><? bloginfo('name'); ?></title>
    
    <!--
      For now, use an inline stylesheet rather than a <link>, so that we can use
      the WordPress template functions like header_image() within the CSS file.
      
      WordPress doesn't seem to support dynamic CSS files (e.g., style.php), so
      this works around the issue.
      -->
      
    <!-- <link rel="stylesheet" href="<? bloginfo('stylesheet_url'); ?>"> -->
    
    <style>
      <? include('style.php'); ?>
    </style>
    
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32335530-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    
  </head>
  
  <body>
    <div id="wrapper"> <!-- contains whole page -->
      
      <div id="header">
        <!-- <a href="<? bloginfo('url'); ?>"> <h1><? bloginfo('name'); ?></h1> </a> -->
        <a href="http://jmv.me/"> <h1><? bloginfo('name'); ?></h1> </a>
        
        <?php wp_nav_menu(); ?>
        
      </div>
      

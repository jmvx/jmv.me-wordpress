<?

/* 
  courtesy of Bainternet on wordpress.stackexchange.com
  http://wordpress.stackexchange.com/questions/14924/pretty-urls-or-permalinks-for-attachments
*/
add_action('generate_rewrite_rules', 'attachment_rewrite_rule_14924');

function attachment_rewrite_rule_14924($wp_rewrite){
  $new_rules = array();
  $new_rules['attachment/(\d*)$'] = 'index.php?attachment_id=$matches[1]';
  $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

/* 
  Adds a "Read More" link instead of [...] 
*/
function new_excerpt_more( $more ) {
  global $post;
  return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"> ... Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*
  Default number of posts is 5, except on the Blog homepage
  Thanks to http://domino.symetrikdesign.com/2011/08/18/increasing-the-number-of-posts-per-page-on-category-tag-and-archive-pages-in-wordpress/#sthash.XoIMQpeb.dpuf
*/
function change_number_of_posts($query) {
  if ( is_admin() || ! $query->is_main_query())
    return;
  
  if ( is_home() ) {
    $query->set( 'posts_per_page', 1 );
    return;
  }
}
add_filter('pre_get_posts', 'change_number_of_posts');

/*
  Set length of excerpt to 20
*/
function custom_excerpt_length( $length ) {
	return 12;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>
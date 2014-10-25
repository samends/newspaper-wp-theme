<?php /*Adds read more to the excerpt */



function modify_excerpt_length() {
      return 25;
   }

add_filter("excerpt_length", "modify_excerpt_length");


/*Gets color for article stub*/
function get_category_color($color_request) {
      $category_color=array("technology"=>"#2db8c2", "sports"=>"#008000", "arts"=>"#800080", "local-business"=>"#FFFF00");
      return $category_color[$color_request];
   }

add_filter("the_category_color", "get_category_color");
?>

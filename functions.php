<?php /*Adds read more to the excerpt */



function modify_excerpt_length() {
      return 25;
   }

add_filter("excerpt_length", "modify_excerpt_length");

?>

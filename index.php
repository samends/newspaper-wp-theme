<?php /*
	Template Name:Cover Page
*/

?>
<?php
/* Variables */
$current_url=get_stylesheet_directory_uri();
?>
<head>

<?php get_header(); ?>
</head>
<body>
  <div class="row-1 row">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_title(); ?>
        <?php endwhile; ?>
        <?php posts_nav_link(); ?></p>
    <?php else : ?>
        <?php echo "there are no post that match this search"; ?>
        <div class="searchlabel"><?php get_search_form();
        get_template_part('content','articles');
         ?></div>
    <?php endif; ?>
?>
get_template_part('content','articles')
  </div>

</body>
<?php get_footer(); ?>

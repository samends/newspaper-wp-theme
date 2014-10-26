<?php /*
	Template Name:Cover Page
*/

?>
<?php
/* Variables */
$current_url=get_stylesheet_directory_uri();
$start=true;
$counter=0;

?>
<head>
<?php get_header(); ?>
</head>
<body>
    <div class="article-row-container row">
        <div class="col-md-1 article-buffer"></div>
        <div class="col-md-9 article-container">
        <?php $article_query = new WP_Query( array( 'posts_per_page' => '9', 'orderby' => 'date') ); ?>
            <?php if ( $article_query->have_posts() ) : ?>
                <?php while ( $article_query->have_posts() ) : $article_query->the_post(); ?>

                      <?php get_template_part('content','articles'); ?>
                      <?php $counter++;
                            $start=false;?>
                <?php endwhile; ?>
                <div class="nav-link">
                    <?php posts_nav_link(); ?>
                </div>
                </div>

            <?php else : ?>
                <?php echo "there are no post that match this search"; ?>
                <div class="searchlabel"><?php get_search_form();?>
                </div>
            <?php endif; ?>
        <!--End of article container -->
      <div class="col-md-2 dc-sidebar">
          <?php get_sidebar(); ?>
      </div>
    </div>
</body>
<?php get_footer(); ?>

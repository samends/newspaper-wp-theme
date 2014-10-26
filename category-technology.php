<?php /*
  Template Name:Category-Technology
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
        <?php $technology_query = new WP_Query( array( 'posts_per_page' => '9', 'category_name' => 'technology', 'orderby' => 'date') ); ?>
        <?php if ( $technology_query->have_posts() ) : ?>
            <?php while ( $technology_query->have_posts() ) : $technology_query->the_post(); ?>
                  <?php if(($counter%3)==0){
                            if($start==true){
                              ?><div class="article-row row"><?php
                            }
                            /*If start equals false*/
                            else{
                              ?></div><div class="article-row row"><?php
                            }
                        }
                        /*If counter is odd do nothing*/
                        else{
                          ?><?php
                        }
                        ?>
                      <?php get_template_part('content','articles'); ?>
                      <?php $counter++;
                            $start=false;?>
                <?php endwhile; ?>
                </div>
                <div class="nav-link">
                    <?php posts_nav_link(); ?>
                </div>
            <?php else : ?>
                <?php echo "there are no post that match this search"; ?>
                <div class="searchlabel"><?php get_search_form();?>
                </div>
            <?php endif; ?>
        <!--End of article container -->
      </div>
      <div class="col-md-2 dc-sidebar">
          <?php get_sidebar(); ?>
      </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    console.log("I'm working");
    $(".home").removeClass('core-selected');
    $(".technology").addClass('core-selected');
    var one=1;
    $("paper-tabs").attr('1',one);
  });
</script>
</body>
<?php get_footer(); ?>

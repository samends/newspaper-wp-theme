
<div class="col-sm-5 article-stub">
  <div class="article paper-shadow-top-z-3 article-block">
      <div ><?php
        $current_url=get_stylesheet_directory_uri();
        $main_url=$current_url.'/img/no-picture.jpg';
          if ( has_post_thumbnail() ) {
            set_post_thumbnail_size( 270, 230, true );
            the_post_thumbnail();}
          else{ ?>
              <img class="article-picture" src="<?php echo $main_url ?>" alt="no-image">
           <?php  } ?>
      </div>
      <h3 class="article_results">
              <a class="articleattr" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h3>
      <div class="article-excerpt">
        <?php the_excerpt(); ?>
      </div>
  </div>
</div>

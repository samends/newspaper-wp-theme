<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 article-stub">
      <?php
      /*Gets color for top of article */
        foreach(get_the_category() as $category){
          if($category->slug=="technology" || $category->slug=="technology" || $category->slug=="sports" || $category->slug=="arts" || $category->slug=="local-business"){
            $cat_name=$category->slug;
          }
        }
        $color=apply_filters("the_category_color",$cat_name);
        $current_url=get_stylesheet_directory_uri();
        $no_picture=$current_url.'/img/no-picture.jpg';?>
        <div  style="border-color:<?php echo $color ?>;" class="article paper-shadow-top-z-3 article-block">
        <div >
          <a href="<?php the_permalink() ?>">
          <?php
            if ( has_post_thumbnail() ) {
              set_post_thumbnail_size(440,230);
              the_post_thumbnail('large');}
            else{ ?>
                <img class="article-picture" src="<?php echo $no_picture?>" alt="no-image">
             <?php  } ?>
         </a>
      </div>
      <h3 class="article_results">
              <a class="articleattr" href="<?php the_permalink(); ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h3>
      <div class="article-excerpt">
        <?php the_excerpt(); ?>
      </div>
  </div>
</div>

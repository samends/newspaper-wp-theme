<?php
/*
YARPP Template: Thumbnails
Description: Requires a theme which supports post thumbnails
Author: mitcho (Michael Yoshitaka Erlewine)
*/ ?>
<h3 class="related-posts">Related Posts</h3>
<?php if (have_posts()):?>
<ol>
	<?php while (have_posts()) : the_post(); ?>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 related-article-stub">
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
						<?php
							if ( has_post_thumbnail() ) {
								set_post_thumbnail_size(440,230);
								the_post_thumbnail('large');}
							else{ ?>
									<a href="<?php get_permalink() ?>"><img class="article-picture" src="<?php echo $no_picture?>" alt="no-image"></a>
							<?php  } ?>
					</div>
					<h3 class="related-article_results">
									<a class="articleattr" href="<?php  the_permalink(); ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h3>
					<div class="article-excerpt">
						<?php the_excerpt(); ?>
					</div>
			</div>
		</div>
	<?php endwhile; ?>
</ol>

<?php else: ?>
<p>No related photos.</p>
<?php endif; ?>

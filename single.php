<?php get_header(); ?>
			<?php foreach(get_the_category() as $category){
				if($category->slug=="technology" || $category->slug=="technology" || $category->slug=="sports" || $category->slug=="arts" || $category->slug=="local-business"){
					$cat_name=$category->slug;
				}
			}
			$color=apply_filters("the_category_color",$cat_name); ?>
			<div id="content" class="clearfix row">
				<div class="single-row1">
				<div id="aricle-content main" class=" col-sm-offset-1 col-sm-7 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article  id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header>
							<div class="article-image">
									<?php the_post_thumbnail( 'wpbs-featured' ); ?>
						  </div>

							<div  style="border-color:<?php echo $color ?>;" class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->

						<section class="post_content clearfix" itemprop="articleBody">
							<?php the_content(); ?>

							<?php wp_link_pages(); ?>

						</section> <!-- end article section -->

						<footer>

							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>

							<?php
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) {
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>

						</footer> <!-- end article footer -->

					</article> <!-- end article -->

					<?php comments_template('',true); ?>

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

			</div> <!-- end #content -->
			<div class="col-sm-4 single-sidebar">
					<?php related_posts();?>

			</div>
		  </div>

<?php get_footer(); ?>

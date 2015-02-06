<?php get_header(); ?>
<?php  
if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }                                                         
  elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }                                                       
  else { $paged = 1; }                                                                                                       

  query_posts('posts_per_page=5&paged=' . $paged);		
?>     
 <div class="row">
		
        <div class="col-sm-8 blog-main">
		
		<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="blog-post-meta"><?php the_time('l, F jS, Y'); ?> by <?php the_author(); ?></p>
			<p class="blog-post-meta">Filed under 
			<?php 
				$category = get_the_category(); 
				if($category[0]){
				echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
				}
			?></p>
			<p><?php the_excerpt();?></p>
          </div><!-- /.blog-post -->
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
          <ul class="pager">
            <li><?php echo get_previous_posts_link("< Anywhere"); ?></li>
            <li><?php echo get_next_posts_link("Nowhere >"); ?></li>     


          </ul>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		<div  data-spy="affix" data-offset-top="10">
		  <?php get_sidebar(); ?>
          </div>
		  </div>
        </div><!-- /.blog-sidebar -->
		
      </div><!-- /.row -->
		
    </div><!-- /.container -->

  <?php get_footer(); ?>
  </body>
</html>

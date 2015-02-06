<?php get_header(); ?>
		
      <div class="row">
		
        <div class="col-sm-8 blog-main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('l, F jS, Y'); ?> </p>
			<p><?php the_content(); ?></p>
          </div><!-- /.blog-post -->
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, there are no posts.'); ?></p>
		<?php endif; ?>
          <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
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

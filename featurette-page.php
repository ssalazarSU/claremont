      <div class="container marketing">
      
      <div class="row featurette">
        <div class="col-md-9">
	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           <h2 class="featurette-page-heading"><?php the_title(); ?></h2>
           <p class="lead"><?php the_content(); ?></p>
	  <?php endwhile; else: ?>
	  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	  <?php endif; ?>
        </div>
      </div>

      <?php get_template_part('footer','claremont'); ?>

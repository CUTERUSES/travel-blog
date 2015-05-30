<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>



    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->

	<div class="sidebar">
	    <div class="party">
	    	<ul class="posts">
	    	<?php get_template_part( 'loop', 'top' ); ?>
	    	</ul>      
		</div>
	</div>

</div> <!-- /.main -->



<?php get_footer(); ?>
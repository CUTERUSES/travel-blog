<?php get_header();  ?>

<div class="main">
  <div class="container">
  <div class="white">
    <div class="aboutContent">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php echo get_avatar( 'default', 200); ?>
        <div class="contentAbout">
          <h2><?php the_title(); ?></h2>
          <h3><?php global $current_user;
        get_currentuserinfo();
        echo  $current_user->display_name . "\n"; ?> </h3>
          <?php the_content(); ?>
        </div>
        

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
    <img src="" alt="">

    <?//php get_sidebar(); ?>
  </div> <!-- white -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
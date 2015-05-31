<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>


	<div class="container">

    	<div class="white">
    		<div class="content" id="homeContainer">
    			<?php get_template_part( 'loop', 'index' );	?>
    		
    		</div> <!-- content -->
    		<?php get_sidebar(); ?>
    	</div> <!-- white -->
  	</div> <!-- /.container -->


<?php get_footer(); ?>
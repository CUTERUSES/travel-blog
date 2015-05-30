<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">

    <div class="content" id="homeContainer">
    		<?php get_template_part( 'loop', 'index' );	?>
	    </div>
    </div> <!--/.content -->


  </div> <!-- /.container -->
   <div class="sidebar">
	      <div class="party">
	        <ul class="posts">
	        <?php get_template_part( 'loop', 'top' ); ?>
	        </ul>
	      
	      </div>
</div> <!-- /.main -->

<?php get_footer(); ?>
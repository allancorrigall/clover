

<?php while (have_posts()) : the_post(); ?>
	
	 
  <?php get_template_part('templates/page', 'header'); ?>
    <div class="container container-main container-decks">
<div class="row">
<div class="col-md-8 col-md-offset-2 ">
  <?php get_template_part('templates/content', 'page'); ?>
  <hr>
  <br><br>
</div>
</div>

<div class="fade-in">
<?php
if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '4' ); } 
if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'dg', 'slug' ); }
?>
</div>
  </div>
<?php endwhile; ?>



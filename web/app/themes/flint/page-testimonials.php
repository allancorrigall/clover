<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
        <div class="container container-main">
  
               
                    <div class="row">
<div class="col-md-8 col-md-offset-2">

                      <?php get_template_part('templates/content', 'page'); ?>
                      <br><hr><br><br><br>
                      
                      </div>
                      </div>
                  

                	<?php

// check if the repeater field has rows of data

                	$cnt = 0;
if( have_rows('testimonial') ):

 	// loop through the rows of data
    while ( have_rows('testimonial') ) : the_row();

$cnt++;



?>

       <div class="row content-holder"> 
      <div class="col-md-6 content-full-height content-text <?php if ($cnt % 2 == 0) echo 'col-md-push-6'; ?> "> <?php the_sub_field('quote'); ?><br><p><span class="attribution pull-right">- <?php the_sub_field('name'); ?></span></p></div>
      <div class="col-md-6 content-full-height <?php if ($cnt % 2 == 0) echo 'col-md-pull-6'; ?>"> <img src="<?php the_sub_field('photo'); ?>" class="img-responsive img-testimonial" ></div>
  	</div>
  	<br><br><br><br><br>
  <?
    endwhile;

else :

    // no rows found

endif;

?>


                  
                </div>
                <br>
        </div>
        <?php endwhile; ?>

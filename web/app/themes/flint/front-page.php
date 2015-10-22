<div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="none" data-interval="7000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="cover-container">
                <div class="cover-background">
                </div>
                <div class="inner cover">
                    <div class="container">
                        <h1 class="cover-heading">Clover decks</h1>
                        <hr>
                        <p class="lead">Providing professional <b>custom decks</b>
                            <br class="hidden-xs"> in <b>Abbotsford</b> and the surrounding area.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="cover-container">
                <div class="cover-background-2">
                </div>
                <div class="inner cover">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-5">
                              
                                <h1 class="cover-heading">Custom built</h1>
                                <hr>
                                <p class="lead">All decks are custom designed</b>
                                    <br class="hidden-xs">with materials that best meet your needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="item">
            <div class="cover-container">
                <div class="cover-background-3">
                </div>
                <div class="inner cover">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                
                                <br class="hidden-xs">
                                <br class="hidden-xs">
                                <h1 class="cover-heading">Maintenance Free Materials</h1>
                                <hr>
                                <p class="lead">Instead of summers spent scraping, painting and </b>
                                    <br class="hidden-xs"> repairing - you can now enjoy a hassle free deck.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- /.carousel -->
<div class="container container-main">
    <?php while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 about-us">
                <?php get_template_part('templates/content', 'page'); ?>
            </div>
        </div>
        <?php endwhile; ?>
            <hr>
            <br>
            <br>
            <br>
            <div class="row pitch">
               <div class="col-md-5 col-md-offset-1 col-md-push-6 col-sm-5 col-sm-push-7">
                    <div class="img-container">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/cloverdecks-quality.png" class="img-responsive">
                    </div>
                    
                </div>
                <div class="col-md-6 pitch-text col-md-pull-6 col-sm-7 col-sm-pull-5">
                    <h1>Quality Products</h1>
                    <h4>We use only top quality products to build beautiful outdoor living spaces. From the deck framing materials and deck boards to the types of fasteners you will have a space to enjoy for years to come. All composite, PVC, and vinyl decking are from top rated companies and  come with the manufacturers warranty. </h4>
                </div>
             
            </div>
            <br>
            <br>
            <br>
            <div class="row  pitch">
                <div class="col-md-5 col-sm-5">
                    <div class="img-container">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/cloverdecks-process.png" class="img-responsive ">
                    </div>
                   
                </div>
                <div class="col-md-6 col-md-offset-1 pitch-text col-sm-7">
                    <h1>Our Process</h1>
                    <h4>In home consultation. Within a few days, you will receive a quote and can show you drawings and 3D images of your deck. We book an estimated start date to build your deck with an approximate length of time it will take.</h4>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row pitch">
               <div class="col-md-5 col-md-offset-1 col-md-push-6 col-sm-5 col-sm-push-7">
                    <div class="img-container">
                        <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/cloverdecks-team.png" class="img-responsive">
                    </div>
                   
                </div>
                <div class="col-md-6 pitch-text col-md-pull-6 col-sm-7 col-sm-pull-5">
                    <h1>Professional team</h1>
                    <h4>Dependable and Reliable service from the first phone call to the finishing touches. All our workmanship is guaranteed for one year. </h4>
                </div>
             
            </div>
            <br>
           </div>
<? $the_query = new WP_Query( 'page_id=6' );
$output = "";
while ( $the_query->have_posts() ) :
$the_query->the_post();
?>
    <div class="container">
        

        <br>

   <br>
        <br>
        <br>

        <?php

// check if the repeater field has rows of data

                  $cnt = 0;
if( have_rows('testimonial') ):

  // loop through the rows of data
    while ( have_rows('testimonial') ) : the_row();

$cnt++;



?>
            <div class="row content-holder">
                <div class="col-md-6 content-full-height content-text <?php if ($cnt % 2 == 0) echo 'col-md-push-6'; ?> ">
                    <?php the_sub_field('quote'); ?>
                        <br>
                        <p><span class="attribution pull-right">- <?php the_sub_field('name'); ?></span></p>
                </div>
                <div class="col-md-6 content-full-height <?php if ($cnt % 2 == 0) echo 'col-md-pull-6'; ?>">
                    <img src="<?php the_sub_field('photo'); ?>" class="img-responsive">
                </div>
            </div>
            <br>
            <br>
            <br>
            <?
if( $cnt > 0 )
      {
        break;
      }

    endwhile;

else :

    // no rows found

endif;

?>
 <br>
          

 <h1 class="text-center title">Reccomended products</h1>
        <div class="row">
<div class="col-sm-3 col-xs-6">
<a href="http://www.trex.com/"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/trex.png" class="img-responsive brands"></a>
</div>
<div class="col-sm-3 col-xs-6">
<a href="http://www.azek.com/"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/azek.png" class="img-responsive brands"></a>
</div>
<div class="col-sm-3 col-xs-6">
<a href="http://timbertech.com/"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/timbertech.png" class="img-responsive brands"></a>
</div>
<div class="col-sm-3 col-xs-6">
<a href="http://tufdek.com/"><img src="<?= get_stylesheet_directory_uri() ?>/assets/images/tufdek.png" class="img-responsive brands"></a>
</div>

</div>
  <br>  <br>
    </div>
    <?php
endwhile;
wp_reset_postdata();
return $output;
?>

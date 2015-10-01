<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
        <div class="container container-main">
            <?php get_template_part('templates/content', 'page'); ?>
            <br>
                <div class="row">
                    <div class="col-sm-5">
                        <br class="hidden-xs">
                        <h2 class="text-center">Call Us</h2>
                        <hr>
                        <h3 class="text-center alt-font">(604) 751-5842</h3>
                    </div>
                    <div class="col-sm-2 text-center">
                        <div class="hr-vertical">
                        </div>
                        <h4 class="text-center text-or">Or</h4>
                        <div class="hr-vertical">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <br class="hidden-xs">
                        <h2 class="text-center">Email Us</h2>
                        <hr>
                        <h3 class="text-center alt-font">info@cloverdecks.com</h3>
                    </div>
                </div>
                <br>
        </div>
        <?php endwhile; ?>

<header class="banner" role="banner">
  <div class="container">
  <div class="row">
  <div class="col-md-2 col-sm-3 col-xs-12">
    <img class="brand" href="<?= esc_url(home_url('/')); ?>" src="<?= get_stylesheet_directory_uri() ?>/assets/images/clover-decks-logo.svg"></a>
       <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      </div>

    <nav role="navigation" class="main-nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
                     'theme_location' => 'primary_navigation',
                     'menu_class' => 'nav',
                      'container_id' => 'main-menu',
                     'container'         => 'div',
                     'container_class'   => 'collapse navbar-collapse ',
                     'menu_class'        => 'nav navbar-nav '




                     ]);
      endif;
      ?>
     
    </nav>
    </div>
  </div>
</header>

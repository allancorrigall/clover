<footer class="content-info" role="contentinfo">
  <div class="container">
  <div class="row">
    <div class="col-sm-4">
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/clover-decks-logo-white.svg" class="img-responsive footer-logo"><br>
    <p>Providing professional custom decks 
in Abbotsford and the surrounding area.</p>
    </div>
     <div class="col-sm-2">
     </div>
     
    <div class="col-sm-3">
      <br class="visible-xs">
     <h4>Menu</h4>
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  <div class="col-sm-3">
  <br class="visible-xs">
  <h4>Contact Us</h4>
  <ul>
  <li><a href="tel:604-751-5842">(604) 751-5842</a></li>
  <li><a href="mailto:info@cloverdecks.com">info@cloverdecks.com</a></li>
  </ul>
    </div>
    </div>
<br><br>
    <p class="text-center text-small"><small>&copy; CLOVER DECKS <?php echo date('Y'); ?> | DESIGNED BY <a href="http://www.lanterncreative.ca">Lantern Creative</a></small></p>
  </div>
</footer>

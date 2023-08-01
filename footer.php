<?php

/**
 * The template for displaying the footer
 *
 *
 */
?>
</main>

<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__logo">
        <a href="<?php site_url() ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" width="103" height="103"></a>
      </div>
      <?php wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'main-menu',
        'container' => 'nav',
        'container_class' => 'footer__nav',
      )); ?>
      <hr>
      <div class="footer__bottom">
        <div class="copyright"><span>© <?php echo date('Y') ?> Sports Canada. All rights reserved.</span></div>
        <div class="logos">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/bga.png' ?>" width="150" height="20">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/18.png' ?>" width="32" height="32">
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</div>
<!-- #site -->
</body>

</html>
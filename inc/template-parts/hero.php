<?php
$background_image = get_field('hero_background');
$title = get_field('hero_title');
$subtitle = get_field('hero_subtitle');
?>
<!-- Hero Section -->
<section class="hero">
  <div class="container container--wide">
    <div class="hero__content">
      <a class="lazy-load js-lazy-load" href="<?php site_url() ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" width="148" height="148"></a>
      <h1 class="hero__title lazy-load js-lazy-load"><?php echo $title; ?></h1>
      <h3 class="hero__subtitle lazy-load js-lazy-load"><?php echo $subtitle; ?></h3>
      <a href="#about" class="hero__cta btn arrow-down lazy-load js-lazy-load">Explore Today</a>
    </div>
  </div>
  <div class="hero__background">
    <?php echo wp_get_attachment_image(
      $background_image,
      'hero',
      false,
      array(
        'loading' => 'eager',
      )
    ) ?>
  </div>
</section>
<!-- End Hero Section -->
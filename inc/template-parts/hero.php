<?php
$background_image = get_field('hero_background');
$title = get_field('hero_title');
$subtitle = get_field('hero_subtitle');
?>

<section class="hero">
  <div class="container container--wide">
    <div class="hero__content">
      <a href="<?php site_url() ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png' ?>" width="148" height="148"></a>
      <h1 class="hero__title"><?php echo $title; ?></h1>
      <h2 class="hero__subtitle"><?php echo $subtitle; ?></h2>
      <a href="#about" class="hero__cta btn">Explore Today</a>
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
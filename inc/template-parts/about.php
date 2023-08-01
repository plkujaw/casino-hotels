<?php
$title = get_field('about_title');
$subtitle = get_field('about_subtitle');
$image = get_field('about_image');
$text = get_field('about_text');
$cta = get_field('about_cta'); ?>

<!-- About Section -->
<section id="about" class="about">
  <div class="container">
    <div class="about__inner">
      <div class="about__heading heading lazy-load js-lazy-load">
        <h3><?php echo $title ?></h3>
        <h2><?php echo $subtitle ?></h2>
      </div>
      <div class="about__image mobile-show lazy-load js-lazy-load">
        <?php echo wp_get_attachment_image($image, 'entry') ?>
      </div>
      <article class="about__text lazy-load js-lazy-load">
        <?php echo $text ?>
      </article>
      <a href="javascript:void(0)" class="about__cta btn lazy-load js-lazy-load">Read More</a>
    </div>
    <div class="about__image mobile-hide lazy-load js-lazy-load">
      <?php echo wp_get_attachment_image($image, 'entry') ?>
    </div>
  </div>
</section>
<!-- End About Section -->
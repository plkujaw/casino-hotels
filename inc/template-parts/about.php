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
      <div class="about__heading">
        <h3><?php echo $title ?></h3>
        <h2><?php echo $subtitle ?></h2>
      </div>
      <div class="about__image mobile-show">
        <?php echo wp_get_attachment_image($image, 'entry') ?>
      </div>
      <article class="about__text">
        <?php echo $text ?>
      </article>
      <a href="" class="about__cta btn">Read More</a>
    </div>
    <div class="about__image mobile-hide">
      <?php echo wp_get_attachment_image($image, 'entry') ?>
    </div>
  </div>
</section>
<!-- End About Section -->
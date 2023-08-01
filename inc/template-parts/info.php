<?php
$title = get_field('info_title');
$subtitle = get_field('info_subtitle');
$image = get_field('info_image');
$content = get_field('info_content');
?>


<!-- Info Section -->
<section class="info">
  <div class="container">
    <div class="info__heading heading">
      <h3><?php echo $title ?></h3>
      <h2><?php echo $subtitle ?></h2>
    </div>
    <div class="info__inner">
      <div class="info__image">
        <?php echo wp_get_attachment_image($image, 'entry') ?>
      </div>
      <article class="info__content">
        <?php
        $index = 1;
        foreach ($content as $item) {
          $indicator = $item['indicator'];
          $title = $item['title'];
          $subtitle = $item['subtitle'];
          empty($indicator) ? $indicator = $index : null;
        ?>
          <div class="content-item">
            <div class="content-item__indicator">
              <span class="indicator"><?php echo $indicator ?></span>
            </div>
            <div class="content-item__content">
              <h3><?php echo $title ?></h3>
              <p><?php echo $subtitle ?></p>
            </div>
          </div>
        <?php
          $index++;
        }
        ?>

      </article>
    </div>
  </div>
</section>
<!-- End Info Section -->
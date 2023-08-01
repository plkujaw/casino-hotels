<?php

$index = $args['index'];
$logo = get_field('casino_logo');
$address = get_field('casino_address');
$star_rating = get_field('casino_star_rating');
$score = get_field('casino_score');
$hotel_link = get_field('casino_link');
$review_link = get_field('casino_review_link');

$rating_value = 100 - $star_rating * 20;

if ($star_rating <= 5 && $star_rating >= 4.5) {
  $rating = 'Excellent';
} else if ($star_rating <= 4.5 && $star_rating >= 4) {
  $rating = 'Very Good';
} else if ($star_rating <= 3.5 && $star_rating >= 3) {
  $rating = 'Good';
} else if ($star_rating <= 3 && $star_rating >= 2.5) {
  $rating = 'Poor';
} else {
  $rating = 'Bad';
}

$score_value = $score * 10;
?>

<div class="table-item lazy-load js-lazy-load" data-rank="<?php echo $index; ?>">
  <div class="table-item__rank">
    <span><?php echo $index; ?></span>
  </div>
  <div class="table-item__logo">
    <?php echo wp_get_attachment_image($logo, 'entry-small') ?>
  </div>
  <div class="table-item__address">
    <span>Address:</span>
    <address><?php echo $address ?></address>
  </div>
  <div class="table-item__rating">
    <div class="score-rating">
      <!-- Change data-value in svg element to impact progress -->
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" data-value="<?php echo $score_value ?>">
        <circle r="45" cx="50" cy="50" />
        <!-- 282.78302001953125 is auto-calculated by path.getTotalLength() -->
        <path class="meter" d="M5,50a45,45 0 1,0 90,0a45,45 0 1,0 -90,0" stroke-linecap="round" stroke-linejoin="round" stroke-dashoffset="282.78302001953125" stroke-dasharray="282.78302001953125" stroke="#fc115c" />
        <!-- Value automatically updates based on data-value set above -->
        <text x="50" y="50" text-anchor="middle" dominant-baseline="central"></text>
      </svg>
    </div>
    <div class="star-rating">
      <svg width="106" height="16" viewBox="0 0 102 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.10534 0L10.9258 4.1685L15.814 5.52786L12.6689 9.4635L12.8695 14.4721L8.10534 12.736L3.34114 14.4721L3.54183 9.4635L0.396704 5.52786L5.28494 4.1685L8.10534 0Z" fill="#FBBF24" />
        <path d="M29.3817 0L32.2021 4.1685L37.0904 5.52786L33.9452 9.4635L34.1459 14.4721L29.3817 12.736L24.6175 14.4721L24.8182 9.4635L21.6731 5.52786L26.5613 4.1685L29.3817 0Z" fill="#FBBF24" />
        <path d="M50.6581 0L53.4785 4.1685L58.3667 5.52786L55.2216 9.4635L55.4223 14.4721L50.6581 12.736L45.8939 14.4721L46.0946 9.4635L42.9494 5.52786L47.8377 4.1685L50.6581 0Z" fill="#FBBF24" />
        <path d="M71.9344 0L74.7549 4.1685L79.6431 5.52786L76.498 9.4635L76.6986 14.4721L71.9344 12.736L67.1702 14.4721L67.3709 9.4635L64.2258 5.52786L69.114 4.1685L71.9344 0Z" fill="#FBBF24" />
        <path d="M93.2108 0L96.0312 4.1685L100.919 5.52786L97.7743 9.4635L97.975 14.4721L93.2108 12.736L88.4466 14.4721L88.6473 9.4635L85.5022 5.52786L90.3904 4.1685L93.2108 0Z" fill="#FBBF24" />
      </svg>
      <span class="mobile-hide"><?php echo $rating ?></span>
      <div class="cover" style="width: <?php echo $rating_value ?>%;"></div>
    </div>

  </div>

  <div class="table-item__links">
    <a href="<?php echo esc_url($hotel_link) ?>" class="btn">Visit Hotel</a>
    <a href="<?php echo esc_url($review_link) ?>">Read Review</a>
  </div>
</div>
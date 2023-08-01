<?php
$title = get_field('table_title')
?>


<!-- Table Section -->
<section class="table">
  <div class="container">
    <div class="table__heading">
      <h2>
        <?php echo $title; ?>
      </h2>
      <span class="date"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-calendar.svg' ?>" /><?php echo date('d/m/y') ?></span>
    </div>
    <div class="table__main">
      <?php
      // display list of post in post type casino-hotel sorted by meta key casino_score in descending order
      $args = array(
        'post_type' => 'casino_hotel',
        'meta_key' => 'casino_score',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'posts_per_page' => -1
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) {
        $index = 1;
        while ($query->have_posts()) {
          $query->the_post();
          echo get_template_part('./inc/template-parts/table-item', null, array('index' => $index));
          $index++;
        }
        wp_reset_postdata();
      }
      ?>
    </div>
  </div>
</section>
<!-- End Table Section -->
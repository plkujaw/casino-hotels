<?php

/**
 * Block Name: Other Block Name
 *
 * Description: Displays Other Block Name.
 */

// The block attributes
$block = $args['block'];

// The block data
$data = $args['data'];

// The block ID
$block_id = $args['block_id'];

// The block class names
$class_name = $args['class_name'];

// Check if in preview mode
$is_preview = $args['is_preview'];
?>

<?php if ($is_preview) {
  block_preview_image($block['name']); ?>
<?php } else { ?>
  <!-- Our front-end template -->
  <div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
    <?php
    if ($data['example_field']) {
      echo "<p>" . $data['example_field'] . "</p>";
    }
    ?>
  </div>
<?php } ?>
<?php

/**
 * Block Name: Block Name
 *
 * Description: Displays Block Name.
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

<!-- <pre>
  <?php print_r($block) ?>
</pre> -->

<!-- Our front-end template -->
<div id="<?php echo $block_id; ?>" class="<?php echo $class_name; ?>">
  <?php
  if ($data['repeater_field']) {
    $fields = $data['repeater_field'];
    foreach ($fields as $field) {
      $subfield1 = $field['subfield1'];
      $subfield2 = $field['subfield2'];
  ?>
      <p><?php echo $subfield1 ?></p>
      <p><?php echo $subfield2 ?></p>
  <?php }
  }
  ?>
  <?php
  if ($data['example_field']) {
    echo "<p>" . $data['example_field'] . "</p>";
  }
  ?>
</div>
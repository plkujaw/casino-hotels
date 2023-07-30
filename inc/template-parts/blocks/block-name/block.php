<?php

/**
 * Block Name
 */

// $data is what we're going to expose to our render template
$data = array(
  'example_field' => get_field('block_name_field'),
  'repeater_field' => get_field('repeater_field'),
);

// Dynamic block ID
$block_id = 'block-name-' . $block['id'];

// Check if a custom ID is set in the block editor
if (!empty($block['anchor'])) {
  $block_id = $block['anchor'];
}

// Block classes
$class_name = 'block-name';
if (!empty($block['class_name'])) {
  $class_name .= ' ' . $block['class_name'];
}

// Block settings
if (!empty($block['backgroundColor'])) {
  $class_name .= ' has-background has-' . $block['backgroundColor'] . '-background-color';
}

/** 
 * Pass the block data into the template part
 */
get_template_part(
  'inc/template-parts/blocks/block-name/template',
  null,
  array(
    'block'      => $block,
    'is_preview' => $is_preview,
    'post_id'    => $post_id,
    'data'       => $data,
    'class_name' => $class_name,
    'block_id'   => $block_id,
  )
);

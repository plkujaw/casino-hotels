<?php

/**
 * Other Block Name
 */

// $data is what we're going to expose to our render template
$data = array(
  'example_field' => get_field('other_block_name_field'),
);

// Dynamic block ID
$block_id = 'block-name-' . $block['id'];

// Check if a custom ID is set in the block editor
if (!empty($block['anchor'])) {
  $block_id = $block['anchor'];
}

// Block classes
$class_name = 'other-block-name';
if (!empty($block['class_name'])) {
  $class_name .= ' ' . $block['class_name'];
}

/** 
 * Pass the block data into the template part
 */
get_template_part(
  'inc/template-parts/blocks/other-block-name/template',
  null,
  array(
    'block'      => $block,
    'is_preview' => $is_preview,
    'post_id'    => $post_id,

    'data'       => $data,
    'class_name' => $class_name,
    'block_id'   => $block_id,
  )
); ?>
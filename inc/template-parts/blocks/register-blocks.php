<?php

register_block_type(get_template_directory() . '/inc/template-parts/blocks/block-name/block.json');
register_block_type(get_template_directory() . '/inc/template-parts/blocks/other-block-name/block.json');

// disable default WordPress blocks and enable only custom blocks

// add_filter('allowed_block_types', 'theme_blocks');

function block_preview_image($block_name)
{
  // convert name ("acf/block-name") into path friendly slug ("block-name")
  $block = str_replace('acf/', '', $block_name);
  $preview_image_url = get_stylesheet_directory_uri() . "/inc/template-parts/blocks/$block/preview.png";
  echo "<figure><img src='$preview_image_url' style='width: 100%; height: auto;'></figure>";
}

function theme_blocks($allowed_blocks)
{
  return array(
    'acf/block-name',
    'acf/other-block-name',
    'core/columns',
    'core/paragraph',
    'core/image',
    'core/cover',
    'core/media-text',
  );
}

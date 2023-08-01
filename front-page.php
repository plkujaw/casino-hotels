<?php

/**
 * The template for displaying the front page (homepage)
 *
 *
 */

get_header();

echo get_template_part('./inc/template-parts/hero');
echo get_template_part('./inc/template-parts/about');
echo get_template_part('./inc/template-parts/table');
echo get_template_part('./inc/template-parts/info');

get_footer();

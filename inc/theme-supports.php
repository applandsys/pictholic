<?php
add_theme_support('title-tag');
// Post Thumbnail
add_theme_support('post-thumbnails');
add_image_size('custom-blog-thumbnail', 9999, 400, false);

add_theme_support('custom-logo', array(
    'height'      => 80,  // Set the height of the logo
    'width'       => 150,  // Set the width of the logo
    'flex-width'  => true,  // Allow flexible width
    'flex-height' => true,  // Allow flexible height
));


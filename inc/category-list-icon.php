<?php

function tm_add_icon_to_category_names($output) {
    // Define the icon HTML you want to prepend
    $icon_html = '<i class="fa fa-caret-right"></i> &nbsp;&nbsp;&nbsp;';

    // Modify the category output by replacing the category name with the icon + name
    $output = preg_replace_callback('/(<a [^>]*>)(.*?)(<\/a>)/', function($matches) use ($icon_html) {
        return $matches[1] . $icon_html . $matches[2] . $matches[3];
    }, $output);

    return $output;
}
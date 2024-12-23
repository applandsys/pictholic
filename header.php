<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <meta name="keywords" content="Movie Pro" />
    <meta name="author" content="Tariq Musharraf" />
    <meta name="MobileOptimized" content="320" />
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="preloader">
    <div id="status">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/header/horoscope.gif" id="preloader_image" alt="loader">
    </div>
</div>
<header>
    <div class="prs_navigation_main_wrapper">
        <div class="container-fluid">
            <div id="search_open" class="gc_search_box">
                <input type="text" placeholder="Search here">
                <button><i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="prs_navi_left_main_wrapper">
                <div class="prs_logo_main_wrapper">
                    <?php if (function_exists('the_custom_logo')): ?>
                        <div class="custom-logo">
                            <?php the_custom_logo('header-logo'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="prs_menu_main_wrapper">
                    <?php get_template_part('template-parts/top', 'nav'); ?>
                </div>
            </div>
            <div class="prs_navi_right_main_wrapper">
                <div class="prs_slidebar_wrapper">
                    <button class="second-nav-toggler" type="button">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/header/bars.png" alt="bar_png">
                    </button>
                </div>
                <div class="prs_top_login_btn_wrapper">
                    <div class="prs_animate_btn1">
                        <ul>
                            <li>
<!--                                <a href="--><?php //echo site_url('/signup'); ?><!--" class="button button--tamaya" data-text="sign up" data-toggle="modal" data-target="#myModal"><span>sign up</span></a>-->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php get_template_part('template-parts/right', 'nav'); ?>
        </div>
    </div>
    <!-- prs navigation End -->
</header>

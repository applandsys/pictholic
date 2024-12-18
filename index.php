<?php get_header(); ?>
<!--<div id="content">-->
<!--    --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--        <h2>--><?php //the_title(); ?><!--</h2>-->
<!--        <p>--><?php //the_content(); ?><!--</p>-->
<!--    --><?php //endwhile; endif; ?>
<!--</div>-->


<!-- prs Slider Start -->
<?php get_template_part('template-parts/full', 'slider'); ?>
<!-- prs Slider End -->
<!-- prs upcomung Slider Start -->
<?php get_template_part('template-parts/upcoming', 'movie'); ?>
<!-- prs upcomung Slider End -->
<!-- prs video section Start -->
<?php // get_template_part('template-parts/video', 'section'); ?>
<!-- prs video section End -->
<!-- prs web series Slider Start -->
<?php // get_template_part('template-parts/upcoming', 'main'); ?>
<!-- prs web series Slider End -->
<!-- prs theater Slider Start -->
<?php // get_template_part('template-parts/theater', 'main'); ?>
<!-- prs theater Slider End -->
<!-- prs letest news Start	-->
<?php // get_template_part('template-parts/latest', 'news'); ?>
<!-- prs letest news End -->
<!-- prs feature slider Start -->
<?php // get_template_part('template-parts/feature', 'event'); ?>
<!-- prs feature slider End -->
<!-- prs videos&photos slider Start -->
<?php // get_template_part('template-parts/video', 'photos'); ?>
<!-- prs videos&photos slider End -->
<!-- prs patner slider Start -->
<?php // get_template_part('template-parts/our', 'partner'); ?>
<!-- prs patner slider End -->
<!-- prs Newsletter Wrapper Start -->
<?php // get_template_part('template-parts/newsletter', 'subscriber'); ?>
<!-- prs Newsletter Wrapper End -->
<?php get_footer(); ?>

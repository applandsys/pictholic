<?php
/* Template Name: Movies */
?>

<?php
get_header();
?>
<div class="hs_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_blog_left_sidebar_main_wrapper">
                    <?php
                    // Arguments for WP_Query
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get current page number
                    $args = array(
                        'post_type' => 'movie', // Replace with your custom post type slug
                        'posts_per_page' => 5,        // Number of posts per page
                        'paged' => $paged,            // Enable pagination
                    );

                    // Custom Query
                    $custom_query = new WP_Query($args);

                    if ($custom_query->have_posts()) :
                        ?>
                        <div class="custom-post-list">
                            <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                                <div class="custom-post-item my-5">
                                    <h1 class="fw-bold"><a href="<?php the_permalink();?>"><?php the_title();?> </a> </h1>
                                   <?php the_content();?>
                                    <div class="mt-4" style="    margin-top: 63px;
    text-align: center;">
                                        <?php
                                        $value = get_field('download'); // Replace 'your_field_name' with your ACF field name
                                        if ($value) {
                                            echo '<a class="btn btn-primary btn-xl real" href="'.esc_html($value) .'">Download</a>';
                                        }
                                        ?>
                                        <div class="mt-4 my-4" style="margin-top: 40px; border-bottom: 2px dashed ">

                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <div class="pagination">
                            <?php
                            echo paginate_links(array(
                                'total' => $custom_query->max_num_pages,
                                'current' => $paged,
                                'prev_text' => __('« Previous'),
                                'next_text' => __('Next »'),
                            ));
                            ?>
                        </div>

                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e('No posts found.'); ?></p>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

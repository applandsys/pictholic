<?php
/* Template Name: Story */
?>

<?php
get_header();
?>
<div class="hs_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_blog_left_sidebar_main_wrapper">

                    <div class="row">
                        <?php
                        // Define the query parameters
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'category_name'=>'story',
                            'posts_per_page' => 4, // Number of posts per page
                            'paged' => $paged,
                        );
                        $query = new WP_Query($args);

                        // Start the loop
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_blog_box1_main_wrapper">
                                        <div class="hs_blog_box1_img_wrapper">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="hs_blog_box1_cont_main_wrapper">
                                            <div class="hs_blog_cont_heading_wrapper">
                                                <ul>
                                                    <li><?php echo get_the_date(); ?></li>
                                                    <li>by <?php the_author(); ?></li>
                                                </ul>
                                                <h2><?php the_title(); ?></h2>
                                                <p><?php echo wp_trim_words(get_the_content(), 50, '...'); ?></p>
                                                <h5><a href="<?php the_permalink(); ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                            </div>
                                        </div>
                                        <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                            <div class="hs_blog_box1_bottom_cont_left">
                                                <ul>
                                                    <li><i class="fa fa-thumbs-up"></i> &nbsp;&nbsp;<a href="#"><?php echo get_post_meta(get_the_ID(), '_likes_count', true) ?: '0'; ?> Likes</a>
                                                    </li>
                                                    <li><i class="fa fa-comments"></i> &nbsp;&nbsp;<a href="#"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
                                                    </li>
                                                    <li><i class="fa fa-tags"></i> &nbsp;&nbsp;<a href="#"><?php the_category(', '); ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="hs_blog_box1_bottom_cont_right">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                            <!-- Custom Pagination -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pager_wrapper prs_blog_pagi_wrapper">
                                    <ul class="pagination">
                                        <?php
                                        $pagination_links = paginate_links(array(
                                            'total' => $query->max_num_pages,
                                            'current' => $paged,
                                            'type' => 'array',
                                            'prev_text' => '<i class="flaticon-left-arrow"></i>',
                                            'next_text' => '<i class="flaticon-right-arrow"></i>',
                                        ));

                                        if ($pagination_links) {
                                            foreach ($pagination_links as $link) {
                                                // Add active class to the current page
                                                if (str_contains($link, 'current')) {
                                                    echo '<li class="btc_shop_pagi active">' . $link . '</li>';
                                                } else {
                                                    echo '<li class="btc_shop_pagi">' . $link . '</li>';
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>

                        <?php else : ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p><?php esc_html_e('No posts found.', 'text-domain'); ?></p>
                            </div>
                        <?php endif;

                        // Restore original post data
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
               <?php get_sidebar()?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

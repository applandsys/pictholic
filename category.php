<?php get_header(); ?>
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <!-- Display the Category Name Dynamically -->
                    <h2><?php single_cat_title(); ?></h2>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp; <?php single_cat_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hs_blog_categories_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_blog_left_sidebar_main_wrapper">
                    <div class="row">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="hs_blog_box1_main_wrapper">
                                        <!-- Featured Image -->
                                        <div class="hs_blog_box1_img_wrapper">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('custom-blog-thumbnail', ['alt' => get_the_title()]); ?>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="hs_blog_box1_cont_main_wrapper">
                                            <div class="hs_blog_cont_heading_wrapper">
                                                <ul>
                                                    <li><?php echo get_the_date(); ?></li>
                                                    <li>by <?php the_author(); ?></li>
                                                </ul>
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <p><?php the_excerpt(); ?></p>
                                                <h5><a href="<?php the_permalink(); ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                            </div>
                                        </div>
                                        <!-- Post Footer -->
                                        <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                            <div class="hs_blog_box1_bottom_cont_left">
                                                <ul>
                                                    <li><i class="fa fa-thumbs-up"></i> &nbsp;&nbsp;<a href="#"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a></li>
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
                            <!-- Pagination -->
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="pager_wrapper prs_blog_pagi_wrapper">
                                    <?php
                                    the_posts_pagination(array(
                                        'mid_size' => 2,
                                        'prev_text' => __('« Previous', 'textdomain'),
                                        'next_text' => __('Next »', 'textdomain'),
                                    ));
                                    ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <p>No posts found in this category.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>

<?php get_header();
// https://chatgpt.com/share/6762b009-e050-800d-ae1e-44802d696697
?>
<!-- prs title wrapper Start -->
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <h2>Blog Singe Page</h2>
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp; Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- prs title wrapper End -->
<div class="hs_blog_categories_main_wrapper hs_blog_categories_main_wrapper2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="hs_blog_left_sidebar_main_wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="hs_blog_box1_main_wrapper">
                                <div class="hs_blog_box1_img_wrapper">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="hs_blog_box1_cont_main_wrapper">
                                    <div class="hs_blog_cont_heading_wrapper">
                                        <ul>
                                            <li><?php echo get_the_date(); ?></li>
                                            <li>by <?php the_author(); ?></li>
                                        </ul>
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                    <!-- Additional Images Section -->
                                    <div class="prs_bs_three_img_sec_wrapper">
                                        <div class="row">
                                            <!-- Example additional images; replace with dynamic fields if needed -->
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="prs_bs_three_img">
                                                    <?php  the_post_thumbnail();?>
                                                    <img src="images/content/blog_category/bs1.jpg" alt="Additional Image">
                                                </div>
                                            </div>
                                            <!-- Add more images as necessary -->
                                        </div>
                                    </div>
                                    <!-- Post Meta -->
                                    <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                        <div class="hs_blog_box1_bottom_cont_left">
                                            <ul>
                                                <li><i class="fa fa-thumbs-up"></i> &nbsp;&nbsp;<a href="#"><?php echo get_post_meta(get_the_ID(), 'likes', true); ?> Likes</a></li>
                                                <li><i class="fa fa-comments"></i> &nbsp;&nbsp;<a href="#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a></li>
                                                <li><i class="fa fa-tags"></i> &nbsp;&nbsp;<?php the_category(', '); ?></li>
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
                        </div>
                        <!-- Comments Section -->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="prs_bs_comment_heading_wrapper">
                                <h2>Comments</h2>
                                <?php
                                if (comments_open() || get_comments_number()) :
                                    comments_template();
                                else :
                                    echo '<p>Comments are closed for this post.</p>';
                                endif;
                                ?>
                            </div>
                        </div>
                        <!-- Comment Form -->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                            <div class="prs_bs_leave_comment_heading_wrapper">-->
<!--                                <h2>Leave a Comment</h2>-->
<!--                            </div>-->
<!--                            --><?php //comment_form(); ?>
<!--                        </div>-->
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

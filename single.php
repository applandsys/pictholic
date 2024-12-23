<?php get_header(); ?>
<div class="prs_title_main_sec_wrapper">
    <div class="prs_title_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="prs_title_heading_wrapper">
                    <!-- Display Post Title Dynamically -->
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li>&nbsp;&nbsp; >&nbsp;&nbsp;
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) : ?>
                                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </a>
                            <?php endif; ?>
                        </li>
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
                    <!-- Post Content -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="post-detail">
                            <!-- Post Thumbnail -->
                            <div class="hs_blog_box1_img_wrapper">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                                <?php endif; ?>
                            </div>

                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="hs_blog_cont_heading_wrapper">
                                    <ul>
                                        <li>Posted on: <?php echo get_the_date(); ?></li>
                                        <li>by <?php the_author(); ?></li>
                                    </ul>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>

                            <!-- Post Categories and Tags -->
                            <div class="post-meta">
                                <ul>
                                    <li><strong>Categories:</strong>
                                        <?php the_category(', '); ?>
                                    </li>
                                    <li><strong>Tags:</strong>
                                        <?php the_tags('', ', ', ''); ?>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    <?php endwhile; else : ?>
                        <p>No posts found.</p>
                    <?php endif; ?>

                    <!-- Comments Section -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="prs_bs_comment_heading_wrapper">
                            <h2>Comments</h2>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="comment-list">
                            <?php
                            $comments = get_comments(array(
                                'post_id' => get_the_ID(),
                                'status' => 'approve', // Ensure only approved comments are fetched
                            ));

                            if (!empty($comments)) {
                                foreach($comments as $comment) {
                                    ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="hs_rs_comment_main_wrapper hs_rs_comment_main_wrapper2">
<!--                                            <div class="hs_rs_comment_img_wrapper">-->
<!--                                                <img src="images/content/blog_category/comm_img1.jpg" alt="comment_img">-->
<!--                                            </div>-->
                                            <div class="hs_rs_comment_img_cont_wrapper hs_rs_blog_single_comment_img_cont_wrapper">
                                                <h2><?php echo $comment->comment_author;?><br> <span><?php echo $comment->comment_date;?></span> <a href="#"> - Reply</a></h2>
                                                <p><?php $comment->comment_content;?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                            } else {
                                echo '<p>No comments fetched.</p>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Leave a Comment Form -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="prs_bs_comment_heading_wrapper prs_bs_leave_comment_heading_wrapper">
                            <h2>Leave a Comment</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="comment-form-wrapper">
                            <?php
                            comment_form(array(
                                'title_reply' => '',
                                'label_submit' => 'Send a Comment',
                                'comment_field' => '<div class="hs_kd_six_sec_input_wrapper"><textarea name="comment" rows="6" placeholder="Comments" required></textarea></div>',
                                'fields' => array(
                                    'author' => '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="hs_kd_six_sec_input_wrapper"><input type="text" name="author" placeholder="Name" required></div></div>',
                                    'email' => '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><div class="hs_kd_six_sec_input_wrapper"><input type="email" name="email" placeholder="Email" required></div></div>',
                                ),
                                'class_submit' => 'hs_kd_six_sec_btn',
                            ));
                            ?>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="prs_bs_comment_heading_wrapper">
                            <h2>Comments</h2>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="comment-list">
                            <?php
                            if (have_comments()) {
                                wp_list_comments(array(
                                    'style' => 'div',
                                    'avatar_size' => 64, // Adjust avatar size if needed
                                ));
                            } else {
                                echo '<p>No comments yet. Be the first to comment!</p>';
                            }
                            ?>
                        </div>
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

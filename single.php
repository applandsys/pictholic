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
                    <?php endwhile; endif; ?>

                    <!-- Comments Section -->
                    <div class="comments-section">
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
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

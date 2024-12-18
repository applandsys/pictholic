<aside id="sidebar">
    <div class="hs_blog_right_sidebar_main_wrapper">
        <div class="prs_mcc_left_searchbar_wrapper">
            <form
                    role="search"
                    method="get"
                    id="searchform"
                    class="searchform"
                  action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" placeholder="Search Movie" name="s" id="s" />
                <button type="submit" id="searchsubmit">
                    <i class="flaticon-tool"></i>
                </button>
            </form>
        </div>
        <div class="prs_mcc_bro_title_wrapper">
            <h2>Category</h2>
            <ul>
                <?php
                wp_list_categories(array(
                    'title_li' => '', // This removes the default "Categories" title
                    'show_count' => true, // Optionally show post counts for each category
                    'hierarchical' => true, // Display categories hierarchically if you have parent/child categories
                    'taxonomy' => 'category', // Only list categories
                ));
                ?>
            </ul>
        </div>
    </div>

    <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>


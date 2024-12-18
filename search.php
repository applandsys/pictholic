<?php get_header(); ?>

<div class="search-results-wrapper">
    <div class="container">
        <h1 class="search-results-title">
            Search Results for: "<?php echo get_search_query(); ?>"
        </h1>

        <?php if (have_posts()) : ?>
            <ul class="search-results-list">
                <?php while (have_posts()) : the_post(); ?>
                    <li>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                the_posts_pagination([
                    'prev_text' => __('Previous'),
                    'next_text' => __('Next'),
                ]);
                ?>
            </div>
        <?php else : ?>
            <p>No results found for "<?php echo get_search_query(); ?>". Please try a different keyword.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

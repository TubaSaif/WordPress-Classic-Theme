<?php
get_header();
?>

<div class="content-area">
    <main class="site-main">
        <div class="container">
            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e('404 - Page Not Found', 'my_simple_theme'); ?></h1>
                </header>

                <div class="page-content">
                    <p><?php _e('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'my_simple_theme'); ?></p>

                    <!-- Search Form -->
                    <div class="search-form-wrapper">
                        <h2><?php _e('Try searching for something else:', 'my_simple_theme'); ?></h2>
                        <?php get_search_form(); ?>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="navigation-buttons">
                        <a href="<?php echo home_url(); ?>" class="btn btn-primary"><?php _e('Go to Homepage', 'my_simple_theme'); ?></a>
                        <a href="<?php echo site_url('/blog'); ?>" class="btn btn-secondary"><?php _e('Visit Our Blog', 'my_simple_theme'); ?></a>
                    </div>

                    <!-- Suggested Links -->
                    <h3><?php _e('Popular Categories', 'my_simple_theme'); ?></h3>
                    <ul class="category-list">
                        <?php
                        wp_list_categories(array(
                            'title_li' => '',
                            'orderby' => 'count',
                            'order' => 'DESC',
                            'number' => 5,
                            'show_count' => true,
                        ));
                        ?>
                    </ul>

                    <!-- Recent Posts -->
                    <h3><?php _e('Recent Posts', 'my_simple_theme'); ?></h3>
                    <ul class="recent-posts">
                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 5,
                            'post_status' => 'publish',
                        ));
                        foreach ($recent_posts as $post) :
                            ?>
                            <li>
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo esc_html($post['post_title']); ?>
                                </a>
                            </li>
                        <?php endforeach; wp_reset_query(); ?>
                    </ul>
                </div>
            </section>
        </div>
    </main>
</div>

<?php
get_footer();
?>

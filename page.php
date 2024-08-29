<?php
// Include the header.php file
get_header();
?>

<div class="content-area">
    <main class="site-main">
        <div class="container">
            <?php
            // Start the Loop to display page content
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post(); 
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>

                        <div class="entry-content">
                            <?php
                            // Display the page content
                            the_content();

                            // Pagination for multi-page content
                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . __('Pages:', 'my_simple_theme'),
                                'after'  => '</div>',
                            ));
                            ?>
                        </div>
                    </article>

                    <?php
                    // If comments are open or there is at least one comment, display the comments template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile;
            else :
                ?>
                <p><?php _e('Sorry, no pages found.', 'my_simple_theme'); ?></p>
            <?php
            endif;
            ?>
        </div>
    </main>
</div>

<?php
// Include the footer.php file
get_footer();
?>

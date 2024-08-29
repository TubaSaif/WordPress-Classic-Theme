<?php
// Include the header.php file
get_header();
?>

<div class="content-area">
    <main class="site-main">
        <div class="container">
            <?php
            // Start the Loop to display the post
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                        <footer class="entry-footer">
                            <p>Posted in <?php the_category(', '); ?></p>
                        </footer>

                        <?php
                        // Display comments if enabled
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                    </article>
                    <?php
                endwhile;
            else :
                ?>
                <p><?php _e('Sorry, no posts found.', 'my_simple_theme'); ?></p>
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

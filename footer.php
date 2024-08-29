<footer class="site-footer">
        <div class="container">
            <div class="footer-widgets">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer-1'); ?>
                    </div>
                <?php endif; ?>
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <div class="footer-widget-area">
                        <?php dynamic_sidebar('footer-2'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer-info">
                <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?>. All rights reserved.</p>
                <nav class="footer-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class' => 'footer-menu',
        'fallback_cb' => false, // Ensures that no fallback content is shown if no menu is set
    ));
    ?>
</nav>

            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

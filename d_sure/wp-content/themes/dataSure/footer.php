<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

</div><!-- #content -->
<footer class="footer <?php
if (!is_front_page()) {
    echo "footer-inner";
}
?>">
    <div class="container">

        <a href="<?php echo site_url(); ?>" class="" rel="home" itemprop="url"><img src="<?php
            if (!is_front_page()) {
                echo get_theme_mod('footerLogoinner');
            } else {
                echo get_theme_mod('footerLogohome');
            }
            ?>" class="custom-logo" alt="" itemprop="logo" sizes="100vw" width="185" height="94"></a>

        <p>Get in touch with us today to find out more.</p>
        <div class="footer-btn">
            <?php if (get_theme_mod('btn_title')) : ?> <a href="<?php echo site_url() . "/" . get_theme_mod('btn_link'); ?>"> <?php echo get_theme_mod('btn_title'); ?> </a><?php endif; ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>

<?php wp_footer(); ?>

</body>
</html>

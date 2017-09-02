<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e('Top Menu', 'twentyseventeen'); ?>">
    <!--<div class="container">-->
        <div class="header_logo">
            <?php the_custom_logo(); ?>
    </div>
    <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php
            echo twentyseventeen_get_svg(array('icon' => 'bars'));
            echo twentyseventeen_get_svg(array('icon' => 'close'));
            _e('Menu', 'twentyseventeen');
            ?></button>
    <!--<div class="right-header ">-->
            <div class="socialIcons">
                <ul class=" listinline">
                    <?php if (get_theme_mod('twitter')) : ?> <li><a target="_blank" href="<?php echo get_theme_mod('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                    <?php if (get_theme_mod('linkedin')) : ?> <li><a target="_blank" href="<?php echo get_theme_mod('linkedin'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php endif; ?>
                </ul>
            </div>
 <?php
            wp_nav_menu(array(
                'theme_location' => 'top',
                'menu_id' => 'top-menu',
                'menu_class' => 'nav navbar-nav navbar-right nav-bar',
            ));
            ?>
        <!--</div>-->
        <?php
//        wp_nav_menu(array(
//            'theme_location' => 'top',
//            'menu_id' => 'top-menu',
//        ));
        ?>

            <?php if (( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header()) : ?>
            <a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg(array('icon' => 'arrow-right')); ?><span class="screen-reader-text"><?php _e('Scroll down to content', 'twentyseventeen'); ?></span></a>
<?php endif; ?>
    <!--</div>-->
</nav><!-- #site-navigation -->

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
<div class="container clearfix">
    <div class="header_logo"><?php the_custom_logo(); ?></div> 
    <div class="right-header clearfix">
        <div class="socialIcons">
            <ul class="clearfix list-inline">
                <?php if (get_theme_mod('twitter')) : ?> <li><a target="_blank" href="<?php echo get_theme_mod('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php endif; ?>
                <?php if (get_theme_mod('linkedin')) : ?> <li><a target="_blank" href="<?php echo get_theme_mod('linkedin'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php endif; ?>
            </ul>
        </div>
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e('Top Menu', 'twentyseventeen'); ?>">
        <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php
        echo twentyseventeen_get_svg(array('icon' => 'bars'));
        echo twentyseventeen_get_svg(array('icon' => 'close'));
        _e('Menu', 'twentyseventeen');
        ?></button>

        <?php
        wp_nav_menu(array(
        'theme_location' => 'top',
        'menu_id' => 'top-menu',
        'menu_class' => 'nav navbar-nav navbar-right nav-bar',
        ));
        ?>
        <!--</div>-->
        <!--</div>-->
        <?php // if (( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header()) : ?>
        <!--<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg(array('icon' => 'arrow-right')); ?><span class="screen-reader-text"><?php _e('Scroll down to content', 'twentyseventeen'); ?></span></a>-->
        <?php // endif; ?>
    </nav><!-- #site-navigation -->
    </div>
</div>
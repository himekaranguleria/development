<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
?>


<div class="main-banner">
    <div class="container">
        <div class="banner-img">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="banner-heading">
            <h2><?php the_field('h_f_banner_title'); ?>
                <?php // the_field('h_badges_section'); ?> 
                <?php // the_field('h_s2_badge_section'); ?> 
                <?php // the_field('h_s2_buttons_section'); ?> 
        </div>

        <div class="banner-content">
            <div class="tag-block">
                <span><?php the_field('h_tag_title'); ?></span>
            </div>
            <h2> <?php the_field('h_tag_line'); ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="banner-content-block">
                        <?php
                        $args = array(
                            'posts_per_page' => 2, // we need only the latest post, so get that post only
//                        'cat' => '6', // Use the category id, can also replace with category_name which uses category slug
                            'category_name' => 'home-page',
                        );
                        $q = new WP_Query($args);
                        if ($q->have_posts()) {
                            ?>
                            <?php
                            while ($q->have_posts()) {
                                $q->the_post();
                                ?>  <p><span><?php the_title(); ?> </span><?php the_content(); ?></p>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="banner-content-list">
                        <?php
                        $h_badges_section = get_field('h_badges_section');
                        if ($h_badges_section) {
                            ?> <ul class="list-unstyled">
                            <?php
                            foreach ($h_badges_section as $key => $value) {
                                ?> <li class="clearfix">
                                        <span class="banner-icon"><img src="<?php echo $value['h_r_b_image'] ?>"></span>
                                        <div class="list-content">
                                            <h5><?php echo $value['h_r_b_title'] ?></h5>
                                            <h6><?php echo $value['h_r_b_sub_title'] ?></h6>
                                        </div>
                                    </li><?php
                                }
                                ?>
                            </ul><?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="banner-btn">
                        <a class="download-btn" href="<?php the_field('h_button_1'); ?>"><?php the_field('h_button_1_title'); ?></a>
                        <a href="<?php the_field('h_button_2'); ?>"><?php the_field('h_button_2_title'); ?></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<section class="offer-sec">
    <div class="container">
        <div class="common-heading">
            <h2><?php the_field('h_section2_title'); ?></h2>
            <p><?php the_field('h_section2_subtitle'); ?></p>
        </div>
        <div class="offer-list">
            <ul class="list-inline">
                <li>
                    <div class="offer-icon">
                        <img src="<?php the_field('h_s2_image_1'); ?>">
                    </div>
                    <div class="offre-content">
                        <h4><?php the_field('h_s2_image_1_title'); ?></h4>
                    </div>
                </li>
                <li>
                    <div class="offer-icon">
                        <img src="<?php the_field('h_s2_image_2'); ?>">
                    </div>
                    <div class="offre-content">
                        <h4><?php the_field('h_s2_image_2_title'); ?></h4>
                    </div>
                </li>
                <li>
                    <div class="offer-icon">
                        <img src="<?php the_field('h_s2_image_3'); ?>">
                    </div>
                    <div class="offre-content">
                        <h4><?php the_field('h_s2_image_3_title'); ?></h4>
                    </div>
                </li>
            </ul>
        </div>

        <div class="acronis-content">
            <h4><?php the_field('h_s2_text'); ?></h4>
            <div class="row">
                <div class="col-sm-6">
                    <?php
                    $h_s2_badge_section = get_field('h_s2_badge_section');
                    if ($h_s2_badge_section) {
                        ?> <ul class="list-unstyled">
                        <?php
                        $count = 0;
                        foreach ($h_s2_badge_section as $key => $value) {
                            if ($count < 3) {
                                ?> <li class="clearfix">
                                        <span class="acronis-icon">
                                            <img src="<?php echo $value['h_s2_badge_section_image']; ?>">
                                        </span>
                                        <div class="acronis-list-content">
                                            <p><?php echo $value['h_s2_badge_section_text']; ?></p>
                                        </div>
                                    </li>
                                    <?php
                                } $count++;
                            }
                            ?>
                        </ul><?php } ?>
                </div>
                <div class="col-sm-6">
                    <?php
                    $h_s2_badge_section = get_field('h_s2_badge_section');
                    if ($h_s2_badge_section) {
                        ?> <ul class="list-unstyled">
                        <?php
                        $count = 0;
                        foreach ($h_s2_badge_section as $key => $value) {
                            if ($count > 2 && $count < 6) {
                                ?> <li class="clearfix">
                                        <span class="acronis-icon">
                                            <img src="<?php echo $value['h_s2_badge_section_image']; ?>">
                                        </span>
                                        <div class="acronis-list-content">
                                            <p><?php echo $value['h_s2_badge_section_text']; ?></p>
                                        </div>
                                    </li>
                                    <?php
                                } $count++;
                            }
                            ?>
                        </ul><?php } ?>
                </div>

            </div>
        </div>
        <div class="banner-btn offer-sec-btn">
            <?php
            $h_s2_badge_section = get_field('h_s2_buttons_section');
            if ($h_s2_badge_section) {
                $count = 0;
                foreach ($h_s2_badge_section as $key => $value) {
                    if ($count == 0)
                        $class = "download-btn";
                    else if ($count == 2)
                        $class = "orange-color";
                    else
                        $class = '';
                    ?>
                    <a class="<?php echo $class; ?>" href="<?php echo $value['h_s2_r_buttons_link'] ?>"><?php echo $value['h_s2_r_buttons_title']; ?></a> 
                    <?php
                    $count++;
                }
            }
            ?>
        </div>
    </div>
</section>
<section class="work-sec">
    <div class="container">
        <div class="common-heading">
            <h2><?php the_field('h_s3_tag_title'); ?></h2>
            <p><?php the_field('h_s3_tag_subtitle'); ?></p>
            <div class="tag-block">
                <span><?php the_field('h_s3_tag'); ?></span>
            </div>
        </div>
        <div class="work-outer">
            <div class="row">
                <?php
                $args = array(
                    'posts_per_page' => 1, // we need only the latest post, so get that post only
//                        'cat' => '6', // Use the category id, can also replace with category_name which uses category slug
                    'category_name' => 'blog',
                );
                $q = new WP_Query($args);
                if ($q->have_posts()) {
                    ?>
                    <?php
                    while ($q->have_posts()) {
                        $q->the_post();
                        ?> <div class="col-sm-4">
                            <div class="work-block">
                                <h4>Blog</h4>
                                <div class="work-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="work-content">
                                    <h5><?php the_title(); ?> </h5>
                                    <?php
                                    $string = get_the_content();
                                    if (strlen($string) > 150) {
                                        $stringCut = substr($string, 0, 150);
                                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                                    }
                                    ?>
                                    <p> <?php echo $string; ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                <?php
                $args = array(
                    'posts_per_page' => 1, // we need only the latest post, so get that post only
//                        'cat' => '6', // Use the category id, can also replace with category_name which uses category slug
                    'category_name' => 'press-release',
                );
                $q = new WP_Query($args);
                if ($q->have_posts()) {
                    ?>
                    <?php
                    while ($q->have_posts()) {
                        $q->the_post();
                        ?>  <div class="col-sm-4">
                            <div class="work-block release-block">
                                <h4>Press Release</h4>
                                <div class="work-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="work-content">
                                    <h5><?php the_title(); ?> </h5>
                                    <?php
                                    $string = get_the_content();
                                    if (strlen($string) > 150) {
                                        $stringCut = substr($string, 0, 150);
                                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                                    }
                                    ?>
                                    <p> <?php echo $string; ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                <?php
                $args = array(
                    'posts_per_page' => 1, // we need only the latest post, so get that post only
//                        'cat' => '6', // Use the category id, can also replace with category_name which uses category slug
                    'category_name' => 'white-paper',
                );
                $q = new WP_Query($args);
                if ($q->have_posts()) {
                    ?>
                    <?php
                    while ($q->have_posts()) {
                        $q->the_post();
                        ?>  
                        <div class="col-sm-4">
                            <div class="work-block paper-block">
                                <h4>White Paper</h4>
                                <div class="work-img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="work-content">
                                    <h5><?php the_title(); ?> </h5>
                                    <?php
                                    $string = get_the_content();
                                    if (strlen($string) > 150) {
                                        $stringCut = substr($string, 0, 150);
                                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                                    }
                                    ?>
                                    <p> <?php echo $string; ?></p>
                                    <a href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>   <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>

            <div class="banner-btn offer-sec-btn">
                <?php
                $h_s2_badge_section = get_field('h_s2_buttons_section');
                if ($h_s2_badge_section) {
                    $count = 0;
                    foreach ($h_s2_badge_section as $key => $value) {
                        if ($count == 0)
                            $class = "download-btn";
                        else if ($count == 2)
                            $class = "orange-color";
                        else
                            $class = '';
                        ?>
                        <a class="<?php echo $class; ?>" href="<?php echo $value['h_s2_r_buttons_link'] ?>"><?php echo $value['h_s2_r_buttons_title']; ?></a> 
                        <?php
                        $count++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();

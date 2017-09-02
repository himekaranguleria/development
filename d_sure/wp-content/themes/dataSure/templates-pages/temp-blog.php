<?php
/* Template Name: Blog Template */
get_header();
?>

<section class="blog-sec">
    <div class="container">
        <div class="common-heading">
            <h2><?php the_title(); ?></h2>
            <?php
            // TO SHOW THE PAGE CONTENTS
            while (have_posts()) : the_post();
                the_content();
            endwhile; //resetting the page loop
            wp_reset_query(); //resetting the page query
            ?>
        </div>

        <div class="row blog-row">
            <?php
            $args = array(
//                'posts_per_page' => 1, // we need only the latest post, so get that post only
//                        'cat' => '6', // Use the category id, can also replace with category_name which uses category slug
                'category_name' => 'blog',
            );
            $q = new WP_Query($args);
            if ($q->have_posts()) {
                ?>
                <?php
                $count = 1;
                while ($q->have_posts()) {
                    $q->the_post();
                    if ($count == 3) {
                        ?> 
                        <div class="col-sm-4">
                            <?php get_sidebar('Blog Sidebar'); ?>
                        </div></div>
                    <div class="row blog-row load-items" style="display: none">
                        <?php
                        $count++;
                    }
                    if ($count == 7) {
                        ?> 
                    </div><div class="row blog-row load-items" style="display: none">
                        <div class="col-sm-12">
                            <div class="data-sure-block clearfix">
                                <?php dynamic_sidebar('sidebar-8'); ?>
                            </div>
                        </div>
                    </div> 
                    <div class="row blog-row load-items" style="display: none">
                        <?php
//                        $count++;
                    }
                    ?>
                    <div class="col-sm-4" >
                        <div class="blog-inner">
                            <div class="blog-img">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="blog-content">
                                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                <?php
                                $string = get_the_content();
                                if (strlen($string) > 60) {
                                    $stringCut = substr($string, 0, 60);
                                    $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '...';
                                }
                                ?>
                                <p> <?php echo $string; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($count % 3 == 0 && $count != 6) {
                        ?>   </div>
                    <div class="row blog-row load-items" style="display: none">
                        <?php
                    } $count++;
                }
                wp_reset_postdata();
            }
            ?>

        </div> 
        <div class="blog-load-btn">
            <a href="javascript:;" id="ViewMoreListItem">Load More</a>
        </div>
    </div>
</section>
<?php
$frontpage_id = get_option('page_on_front');
$meta = get_post_meta($frontpage_id); // get details of front page 
$h_badges_section = $meta['h_badges_section']['0'];
//echo "<pre>";
//print_r($meta);
//echo "</pre>";
;
?>
<section class="offer-sec">
    <div class="container">
        <div class="common-heading">
            <h2><?php echo $meta['h_section2_title']['0']; ?></h2>
            <?php echo $meta['h_section2_subtitle']['0']; ?>
        </div>
        <div class="offer-list">
            <ul class="list-inline">
                <li>
                    <div class="offer-icon">
                        <img src="<?php echo wp_get_attachment_url($meta['h_s2_image_1']['0']); ?>">
                    </div>
                    <div class="offre-content">
                        <h4><?php echo $meta['h_s2_image_1_title']['0']; ?></h4>
                    </div>
                </li>
                <li>
                    <div class="offer-icon">
                        <img src="<?php echo wp_get_attachment_url($meta['h_s2_image_2']['0']); ?>">
                    </div>
                    <div class="offre-content">
                        <h4><?php echo $meta['h_s2_image_2_title']['0']; ?></h4>
                    </div>
                </li>
                <li>
                    <div class="offer-icon">
                        <img src="<?php echo wp_get_attachment_url($meta['h_s2_image_3']['0']); ?>">
                    </div>
                    <div class="offre-content">
                        <h4><?php echo $meta['h_s2_image_3_title']['0']; ?></h4>
                    </div>
                </li>
            </ul>
        </div>
        <div class="blog-inner-content">
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
                        <ul class="list-unstyled">
                            <li class="clearfix">
                                <span class="banner-icon"><img src="<?php echo wp_get_attachment_url($meta['h_badges_section_0_h_r_b_image']['0']); ?>"></span>
                                <div class="list-content">
                                    <h5><?php echo $meta['h_badges_section_0_h_r_b_title']['0']; ?></h5>
                                    <h6><?php echo $meta['h_badges_section_0_h_r_b_sub_title']['0']; ?></h6>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span class="banner-icon"><img src="<?php echo wp_get_attachment_url($meta['h_badges_section_1_h_r_b_image']['0']); ?>"></span>
                                <div class="list-content">
                                    <h5><?php echo $meta['h_badges_section_1_h_r_b_title']['0']; ?></h5>
                                    <h6><?php echo $meta['h_badges_section_1_h_r_b_sub_title']['0']; ?></h6>
                                </div>
                            </li>
                            <li class="clearfix">
                                <span class="banner-icon"><img src="<?php echo wp_get_attachment_url($meta['h_badges_section_2_h_r_b_image']['0']); ?>"></span>
                                <div class="list-content">
                                    <h5><?php echo $meta['h_badges_section_2_h_r_b_title']['0']; ?></h5>
                                    <h6><?php echo $meta['h_badges_section_2_h_r_b_sub_title']['0']; ?></h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="blog-btn">
            <a class="clearfix" href="<?php echo site_url() . "/" . the_field('tab_1_link'); ?>">
                <div class="blog-btn-icon">
                    <img src="<?php the_field('tab_1_image'); ?>">
                </div>
                <span>
                    <h4><?php the_field('tab_1_title'); ?></h4>
                    <?php the_field('tab_1_text'); ?>
                </span>
            </a>
            <a class="contact-btn clearfix" href="<?php echo site_url() . "/" . the_field('tab_2_link'); ?>">
                <div class="blog-btn-icon">
                    <img src="<?php the_field('tab_2_image'); ?>">
                </div>
                <span>
                    <h4><?php the_field('tab_2_title'); ?></h4>
                    <?php the_field('tab_2_text'); ?>
                </span>
            </a>

        </div>
    </div>
</section>



<?php get_footer(); ?>




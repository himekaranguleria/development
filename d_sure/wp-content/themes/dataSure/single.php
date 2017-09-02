<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header();
while (have_posts()) : the_post();
    global $post;
    ?>

    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><a href="<?php echo site_url() . "/" . $category_detail[0]->slug . "/"; ?>"><?php echo $category_detail[0]->name; ?></a></li>
                        <li><a href="javascript():;"><?php echo the_title(); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-content article-content">
                        <h2><?php the_title(); ?> </h2>
                        <?php the_content(); ?> 

                    </div>
                </div>
                <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                    <?php
                    $frontpage_id = get_option('page_on_front');
                    $meta = get_post_meta($frontpage_id); // get details of front page  
                    ?>
                    <div class="article-datasure">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2017/08/article-data-img.png">
                        <ul class="list-unstyled">
                            <li class="clearfix">
                                <span class="banner-icon"><img src="<?php echo wp_get_attachment_url($meta['h_badges_section_0_h_r_b_image']['0']); ?>"></span>
                                <div class="list-content">
                                    <h5><?php echo $meta['h_badges_section_0_h_r_b_title']['0']; ?></h5>
                                    <h6><?php echo $meta['h_badges_section_0_h_r_b_sub_title']['0']; ?></h6>

                                </div>
                            </li>
                            <li  class="clearfix">
                                <span class="banner-icon"><img src="<?php echo wp_get_attachment_url($meta['h_badges_section_1_h_r_b_image']['0']); ?>"></span>
                                <div class="list-content">
                                    <h5><?php echo $meta['h_badges_section_1_h_r_b_title']['0']; ?></h5>
                                    <h6><?php echo $meta['h_badges_section_1_h_r_b_sub_title']['0']; ?></h6>
                                </div>
                            </li>
                            <li  class="clearfix">
                                <span class="banner-icon"><img src="<?php echo wp_get_attachment_url($meta['h_badges_section_2_h_r_b_image']['0']); ?>"></span>
                                <div class="list-content">
                                    <h5><?php echo $meta['h_badges_section_2_h_r_b_title']['0']; ?></h5>
                                    <h6><?php echo $meta['h_badges_section_2_h_r_b_sub_title']['0']; ?></h6>
                                </div>
                            </li>
                            <li class="article-btn">
                                <a href="#">View the Infographic</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php
get_footer();

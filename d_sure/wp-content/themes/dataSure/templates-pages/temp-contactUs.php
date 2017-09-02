<?php
/* Template Name: Contact Us Template */
get_header();
?>

<div class="breadcrumb-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    <li class="active"><a href="javascript:;"> <?php echo the_title(); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-content">
                    <h2><?php the_title(); ?></h2>
                    <?php
                    // TO SHOW THE PAGE CONTENTS
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile; //resetting the page loop
                    wp_reset_query(); //resetting the page query
                    ?>
                    <?php
                    $frontpage_id = get_option('page_on_front');
                    $meta = get_post_meta($frontpage_id); // get details of front page 
                    ?>
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
                    <?php
//                    echo "<pre>";
//                    print_r($meta);
//                    echo "</pre>";
                    ?>
                </div>
            </div>
            <div class="col-sm-4">
                <?php get_sidebar('Blog Sidebar'); ?>
            </div>
            <div class="col-sm-12">
                <div class="data-sure-block contact-datasure clearfix">
                     <?php dynamic_sidebar('sidebar-7'); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>




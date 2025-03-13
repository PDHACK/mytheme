<?php
/**
 * Template Name: Portfolio Page
 */
get_header();
?>

<section class="portfolio_section layout_padding">
    <div class="container">
        <div class="custom_heading-container">
            <h2><?php the_title(); ?></h2>
            <hr>
        </div>
        
        <div class="row portfolio-grid">
            <?php
            $portfolio_items = get_posts(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6
            ));
            
            foreach ($portfolio_items as $item) :
                $image = get_the_post_thumbnail_url($item->ID, 'large');
            ?>
                <div class="col-md-4 portfolio-item">
                    <div class="img-box">
                        <img src="<?php echo $image; ?>" alt="<?php echo $item->post_title; ?>">
                        <a href="<?php echo get_permalink($item->ID); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/link.png" alt="View">
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
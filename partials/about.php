
<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <h6><?php echo get_theme_mod('about_subtitle', 'About'); ?></h6>
                    <div class="custom_heading-container">
                        <h2><?php echo get_theme_mod('about_title', 'Web Elements'); ?></h2>
                        <hr>
                    </div>
                    <div class="about-content">
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <?php 
                    $about_image = get_theme_mod('about_image', get_template_directory_uri().'/images/about-img.png');
                    if($about_image):
                    ?>
                        <img src="<?php echo esc_url($about_image); ?>" alt="About Us">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Contact Page
 */
get_header();
?>

<section class="contact_section layout_padding">
    <div class="container">
        <div class="d-flex flex-column align-items-end">
            <div class="custom_heading-container">
                <hr>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        
        <div class="layout_padding-top layout_padding2-bottom">
            <div class="row">
                <div class="col-md-7">
                    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form"]'); ?>
                </div>
                <div class="col-md-5">
                    <div class="map-box">
                        <?php echo get_theme_mod('map_embed', '<iframe src="https://maps.google.com/maps?q=..."></iframe>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
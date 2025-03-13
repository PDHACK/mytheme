
<?php
/**
 * Template Name: News Archive
 */
get_header();
?>

<section class="news_section layout_padding">
    <div class="container">
        <div class="d-flex flex-column align-items-end">
            <div class="custom_heading-container">
                <hr>
                <h2><?php post_type_archive_title(); ?></h2>
            </div>
        </div>
        
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-4">
                    <div class="news-box">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="news-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="news-content">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
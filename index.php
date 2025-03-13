
<?php
/**
 * The main template file
 *
 * @package Elements Theme
 */

get_header();
?>

<main class="main-content">
    <section class="blog-section layout_padding">
        <div class="container">
            <div class="custom_heading-container">
                <h2><?php echo get_theme_mod('blog_title', 'Latest News'); ?></h2>
                <hr>
            </div>

            <div class="row">
                <?php if (have_posts()) : 
                    while (have_posts()) : the_post(); ?>
                        
                        <article <?php post_class('col-md-6 mb-5'); ?> id="post-<?php the_ID(); ?>">
                            <div class="post-box">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid']); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    
                                    <div class="post-meta">
                                        <span class="date"><?php the_date(); ?></span>
                                        <span class="author"><?php the_author(); ?></span>
                                    </div>
                                    
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        <?php _e('Read More', 'elements-theme'); ?>
                                    </a>
                                </div>
                            </div>
                        </article>

                    <?php endwhile; ?>

                    <div class="col-12 pagination-wrapper">
                        <?php
                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('« Previous', 'elements-theme'),
                            'next_text' => __('Next »', 'elements-theme'),
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    
                    <div class="col-12">
                        <p class="no-posts"><?php _e('No posts found.', 'elements-theme'); ?></p>
                    </div>

                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
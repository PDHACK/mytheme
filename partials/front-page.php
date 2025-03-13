
<?php get_header(); ?>

<!-- Contenido específico del home -->
<section class="slider_section position-relative">
    <?php get_template_part('partials/slider'); ?>
</section>

<!-- Secciones adicionales -->
<?php get_template_part('partials/services'); ?>
<?php get_template_part('partials/portfolio'); ?>

<?php get_footer(); ?>
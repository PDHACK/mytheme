
<section class="info_section layout_padding">
    <div class="container">
        <div class="info_social">
            <?php dynamic_sidebar('footer-social'); ?>
        </div>
        <div>
            <?php dynamic_sidebar('footer-text'); ?>
        </div>
    </div>
</section>

<footer class="container-fluid footer_section">
    <p>
        &copy; <?php echo date('Y'); ?> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
    </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>
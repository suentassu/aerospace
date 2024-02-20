
</main>


<div class="red-line"></div>
<footer>
    <div class="footer-overlay">

        <div class="footer-container">


        <?php if ( is_active_sidebar( 'footer_widget' ) ) : ?>
            <?php dynamic_sidebar( 'footer_widget' ); ?>
        <?php endif; ?>

        </div>


    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 
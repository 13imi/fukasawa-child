</div><!-- .wrapper -->

<?php wp_footer(); ?>

    <script type="text/javascript">
           /* ここに書きます */
           jQuery('#main-img').vegas({
                   overlay: '<?php bloginfo('stylesheet_directory'); ?>/js/vegas/overlays/01.png',
                   transition: 'fade',
                   transitionDuration: 2000,
                   delay: 10000,
                   // animation: 'kenburnsDown',
                   // animationDuration: 20000,
                   slides: [
    { src: '<?php bloginfo('stylesheet_directory'); ?>/images/Nakatajima01.png' },
    { src: '<?php bloginfo('stylesheet_directory'); ?>/images/Kurumeki01.png' }
                   ]
               });
</script>

</body>
</html>
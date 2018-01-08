<div class="credits-sp vissible-sp">
  <p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">とおとうみプロジェクト</a>.</p>
</div>
</div><!-- .wrapper -->

<?php wp_footer(); ?>

<script type="text/javascript">
 /* ここに書きます */
 jQuery('#main-img').vegas({
     overlay: '<?php bloginfo('stylesheet_directory'); ?>/js/vegas/overlays/01.png',
     transition: 'fade',
     transitionDuration: 2000,
     delay: 10000,
     timer: false,
     slides: [
         { src: '<?php bloginfo('stylesheet_directory'); ?>/images/Nakatajima01.png' },
         { src: '<?php bloginfo('stylesheet_directory'); ?>/images/Kurumeki01.png' }
     ]
 });
</script>

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scroll_smooth.js"></script>

</body>
</html>

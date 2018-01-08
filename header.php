<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

      <?php wp_enqueue_script('vegas', get_bloginfo('stylesheet_directory') . '/js/vegas/vegas.min.js', array('jquery')); ?>
		<?php wp_head(); ?>
      <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/vegas/vegas.min.css" type="text/css" />

	</head>

	<body <?php body_class(); ?>>

		<div class="mobile-navigation">

			<ul class="mobile-menu">

				<?php
				if ( has_nav_menu( 'primary' ) ) {

					$nav_args = array(
						'container' 		=> '',
						'items_wrap' 		=> '%3$s',
						'theme_location' 	=> 'primary'
					);

					wp_nav_menu( $nav_args );

				} else {

					$list_pages_args = array(
						'container' => '',
						'title_li' 	=> ''
					);

					wp_list_pages( $list_pages_args );

				}
				?>

			 </ul>

		</div><!-- .mobile-navigation -->

		<div class="sidebar">

      	<div class="logo">
      <a class="hidden-sp" href="/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Totoumi02.png" class="img-logo-pc">
      </a>
      <a class="vissible-sp" href="/">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Totoumi03.png" class="img-logo-sp">
      </a>
     </div>


			<?php if ( get_theme_mod( 'fukasawa_logo' ) ) : ?>

		        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
		        	<img src='<?php echo esc_url( get_theme_mod( 'fukasawa_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
		        </a>

			<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) :

				// h1 on singular, h2 elsewhere
				$title_type = is_singular() ? '2' : '1'; ?>

				<h<?php echo $title_type; ?> class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
				</h<?php echo $title_type; ?>>

			<?php endif; ?>

			<a class="nav-toggle hidden" title="<?php _e( 'Click to view the navigation', 'fukasawa' ); ?>" href="#">

				<div class="bars">

					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>

					<div class="clear"></div>

				</div>

				<p>
					<span class="menu"><?php _e( 'Menu', 'fukasawa' ); ?></span>
					<span class="close"><?php _e( 'Close', 'fukasawa' ); ?></span>
				</p>

			</a>

               <?php
                 if (is_home()) {
                      get_sidebar("1");
                 } else {
                      get_sidebar("2");
                 }
               ?>

				<ul class="main-menu">

					<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( $nav_args );
					} else {
						wp_list_pages( $list_pages_args );
					}
					?>

				</ul>

				<div class="credits">

					<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">とおとうみプロジェクト</a>.</p>


				</div>

				<div class="clear"></div>

		</div><!-- .sidebar -->

		<div class="wrapper" id="wrapper">
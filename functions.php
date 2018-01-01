<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
                        get_stylesheet_directory_uri() . '/style.css',
                        array('parent-style'),
                        filemtime( get_theme_file_path( 'style.css' ) )
        );
}

//style.cssをタイムスタンプ付きで読み込む関数
function header_stylecss_include() {
 $styleurl = get_bloginfo("stylesheet_url"); //現在のテーマのstyle.cssのパスを取得
 $styletime = filemtime( get_stylesheet_directory() . '/style.css'); //現在現在のテーマのstyle.cssのタイムスタンプ取得
 echo '<link rel="stylesheet" id="child-style-css" href="',$styleurl,'?',$styletime,'" />'; //タイムスタンプ付きstyle.cssを読み込む
}
add_action('wp_head', 'header_stylecss_include');


// Sidebar
register_sidebar( array(
    'name' => __( 'Sidebar1', 'twentytwelve' ),
    'id' => 'sidebar-1',
    'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
    'before_title' 	=> '<h3 class="widget-title">',
    'after_title' 	=> '</h3>',
    'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
    'after_widget' 	=> '</div><div class="clear"></div></div>',
) );

register_sidebar( array(
    'name' => __( 'Sidebar2', 'twentytwelve' ),
    'id' => 'sidebar-2',
    'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
    'before_title' 	=> '<h3 class="widget-title">',
    'after_title' 	=> '</h3>',
    'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
    'after_widget' 	=> '</div><div class="clear"></div></div>',
) );

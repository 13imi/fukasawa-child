<?php
// 指定したカテゴリーの ID を取得
$history_id = get_cat_ID( '遠江の歴史' );
$tour_id = get_cat_ID( '遠江あるき' );
$food_id = get_cat_ID( '山食・里食・海食' );
$goods_id = get_cat_ID( '遠江ものづくり' );

// このカテゴリーの URL を取得
$history_link = get_category_link( $history_id );
$tour_link = get_category_link( $tour_id );
$food_link = get_category_link( $food_id );
$goods_link = get_category_link( $goods_id );
?>

<?php get_header(); ?>

<div class="content">
  <div class="relative">
    <div id="main-img"></div>
    <div id="map-img" class="absolute"></div>

    <div class="main-catch vissible-sp">
    </div>

    <div class="catch vissible-sp">
      <p class="main">
        心を取り戻す 癒しの國 遠江
      </p>
      <p class="sub">
        現在の静岡県西部地方を指す言葉、<strong>遠江（とおとうみ）</strong>。<strong>遠州（えんしゅう）</strong>とも呼ばれます。遠江には、<strong>海・山・里</strong>…すべてがあり、地域独特の歴史・文化があります。ここにしかいない人。そこにしかない体験。遠江に生きる人間が、遠江の魅力を伝える。それが<strong>「とおとうみプロジェクト」</strong>です。
      </p>
      <div class="click-arrow">
        <a href="#article-links">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Arrow01.png" class="menu-arrow" alt="" />
        </a>
      </div>
    </div>


      <div class="article-links absolute-2" id="article-links">
      <div class="click-arrow hidden-sp">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Click01.png" class="" alt="" />
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Arrow01.png" class="menu-arrow" alt="" />
      </div>
      <a href="<?php echo esc_url( $history_link ); ?>" class="square_btn">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Menu01.png" class="" alt="" />
      </a><br />
      <a href="<?php echo esc_url( $tour_link ); ?>" class="square_btn">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Menu02.png" class="" alt="" />
      </a><br />
      <a href="<?php echo esc_url( $food_link ); ?>" class="square_btn">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Menu03.png" class="" alt="" />
      </a><br />
      <a href="<?php echo esc_url( $goods_link ); ?>" class="square_btn">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/Menu04.png" class="" alt="" />
      </a>
    </div>
  </div><!-- .relative -->

</div><!-- .content -->


<?php get_footer(); ?>

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

    <div class="article-links absolute-2">
      <a href="<?php echo esc_url( $history_link ); ?>" class="square_btn">遠江の歴史</a><br />
      <a href="<?php echo esc_url( $tour_link ); ?>" class="square_btn">遠江あるき</a><br />
      <a href="<?php echo esc_url( $food_link ); ?>" class="square_btn">山食・里食・海食</a><br />
      <a href="<?php echo esc_url( $goods_link ); ?>" class="square_btn">遠江ものづくり</a>
    </div>
  </div><!-- .relative -->

</div><!-- .content -->


<?php get_footer(); ?>

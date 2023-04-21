<?php get_header(); ?>

<main class="plan">
<section class="header__title">
  <span>PLAN</span>
  <h2>料金プラン</h2>
</section>

<?php
if( have_posts() ):
  while ( have_posts() ):
    the_post();
?>
<img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="CHANDRA">
<div class="plans-container">
  <div class="plan-content">
    <span class="plan-tagline">手軽に名刺代わりのホームページを作成！</span>
    <h2 class="plan-name">ライトプラン</h2>
    <p class="plan-description">運用サービスはあまり充実しておらず、名刺代わりの簡易的なホームページをお求めの方におススメのプランです。</p>
    <p class="plan-price">1,000円/月</p>
  </div>

  <div class="plan-content">
    <span class="plan-tagline">基本的なSEO対策や更新代行もお任せ！</span>
    <h2 class="plan-name">スタンダードプラン</h2>
    <p class="plan-description">基本的なSEO対策や更新代行などの運用サービスがつき、一番おすすめのプランです。</p>
    <p class="plan-price"><strong>5,000円/月</strong></p>
  </div>

  <div class="plan-content">
    <span class="plan-tagline">本格的な集客を実現するプレミアムプラン！</span>
    <h2 class="plan-name">プレミアムプラン</h2>
    <p class="plan-description">スタンダードプランのサービスにプラス、アクセス解析や独自の機能追加など本格的にホームページで集客をしたいお客様におススメのプランです。</p>
    <p class="plan-price"><strong>10,000円/月</strong></p>
  </div>
</div>

<?php
endwhile;
endif;
?>
</main>

<?php get_footer(); ?>

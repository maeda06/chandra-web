<?php get_header(); ?>
  <main>
    <section id="main-area"">
      <div class="main-area__text">
        <h1>スモールビジネスにwebのチカラを</h1>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="株式会社chandra"> -->
        <p>事業規模が小さい中小企業や個人向けのwebサイト運営サービス</p>
      </div>
      <div class="main-area__image"><img src="<?php echo get_template_directory_uri(); ?>/images/1904.png" alt=""></div>
    </section>

    <section id="feature" class="fade-in">
      <div class="feature__text">
        <h1>お買い物はリアルよりもネットの時代</h1>
        <div class="feature__img--sp"><img src="<?php echo get_template_directory_uri(); ?>/images/feature.png" alt=""></div>
        <p>コロナ禍の影響もあり、昨今では以前にも増してインターネットで物を買う人が増えています。しかし、多くの中小企業や個人経営の企業はまだまだインターネットを使ったマーケティングが活用しきれていない現状です。</br>私たちはそんなスモールビジネスの成長をWebのチカラでサポートします。</p>
      </div>
      <div class="feature__img--pc"><img src="<?php echo get_template_directory_uri(); ?>/images/feature.png" alt=""></div>
    </section>

    <section id="point" class="fade-in">
      <div class="point__image--pc"><img src="<?php echo get_template_directory_uri(); ?>/images/point-image.png" alt=""></div>
      <div class="point__text">
        <span>CHANDRA POINT</span>
        <h2>CHANDRAの特徴</h2>
        <div class="point__image--sp"><img src="<?php echo get_template_directory_uri(); ?>/images/point-image.png" alt=""></div>
        <p>CHANDRAでは中小企業向けに低価格でホームページを持つことができるように、サブスクリプション型（月額定額制）のホームページ運用サービスを提供しています。</p>
        <ul>
          <li>サブスク型にすることで初期費用を抑え低価格でホームページを制作</li>
          <li>お客様専任のウェブ担当者を配属​することでお客様のビジネスの変化に合わせた柔軟な運用を提供</li>
          <li>不満な点があればいつでも解約OK!</li>
        </ul>
        <div class="service__button">
          <a href="/service">機能・料金ページはこちら</a>
        </div>
      </div>
    </section>

    <?php
    $args = array( 'post_type' => 'column' );
    $the_query = new WP_Query($args);
    if( $the_query->have_posts() ):
    $categories = get_the_category();
    $category_link = get_category_link( $categories[0]->term_id );
    $category_name = $categories[0]->name;
    ?>
    <section id="column" class="fade-in">
      <div class="column__title">
        <div class="section__title">
          <span>COLUMN</span>
          <h2>お役立ちコラム</h2>
          <div class="column__button">
            <a href="#">お役立ちコラム一覧</a>
          </div>
        </div>
      </div>
      <div class="column__slider">
        <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
        <div class="column__item">
          <a href="<?php the_permalink(); ?>">
            <div class="column__img"><?php the_post_thumbnail("medium", array("alt" => get_the_title(), "class" => "sample")); ?></div>
            <div class="column__text">
              <span class="column__date"><?php echo get_the_date(); ?></span>
              <span class="coumn__category"><?php echo $category_name; ?></span>
              <?php the_excerpt(); ?>
            </div>
          </a>
        </div>
        <?php endwhile; ?>
      </div>
    </section>
    <?php endif; ?>

    <?php
    $args = array( 'post_type' => 'post' );
    $the_query = new WP_Query($args);
    if( $the_query->have_posts() ):
    ?>
    <section id="news" class="fade-in">
      <div class="section__title">
        <span>NEWS</span>
        <h2>お知らせ</h2>
      </div>
      <ul class="news__wrapper">
        <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
        <?php
        $categories = get_the_category();
        $category_link = get_category_link( $categories[0]->term_id );
        $category_name = $categories[0]->name;
        ?>
        <li class="news__list">
          <a href="<?php the_permalink(); ?>">
            <span class="news__category"><?php echo $category_name; ?></span><span class="news__date"><?php echo get_the_date(); ?></span>
            <div><?php echo get_the_title(); ?></div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    </section>
    <?php endif; ?>
  </main>

  <?php get_footer(); ?>
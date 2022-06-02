<?php get_header(); ?>

  <section id="main-area">
    <div class="main-area__text">
      <h1>スモールビジネスにwebのチカラを</h1>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="株式会社chandra"> -->
      <p>事業規模が小さい中小企業や個人向けのwebサイト運営サービス</p>
      <div class="button">
        <p>お気軽にお問合せください！</p>
        <a href="#">お問い合わせはコチラ</a>
      </div>
    </div>
    <div class="main-area__image"><img src="<?php echo get_template_directory_uri(); ?>/images/1904.png" alt=""></div>
  </section>

  <!-- <section id="worries">
    <h1>こんな悩みお持ちではありませんか？</h1>
    <div class="worries__content-wrap">
      <div>
        <img src="<?php// echo get_template_directory_uri(); ?>/images/worries1.png" alt="">
        <p>ホームページが欲しいのに制作費が高くて手出せない...</p>
      </div>
      <div>
        <img src="<?php// echo get_template_directory_uri(); ?>/images/worries2.png" alt="">
        <p>webで集客をしたいが何をしたらいいかわからない</p>
      </div>
    </div>
  </section> -->

  <section id="feature">
    <div class="feature__text">
      <h1>お買い物はリアルよりもネットの時代</h1>
      <p>コロナ禍の影響もあり、昨今では以前にも増してインターネットで物を買う人が増えています。しかし、多くの中小企業や個人経営の企業はまだまだインターネットを使ったマーケティングが活用しきれていない現状です。</br>私たちはそんなスモールビジネスの成長をWebのチカラでサポートします。</p>
    </div>
    <div class="feature__img"><img src="<?php echo get_template_directory_uri(); ?>/images/feature.png" alt=""></div>
  </section>

  <section id="point">
    <div class="point__content--image"><img src="<?php echo get_template_directory_uri(); ?>/images/point-image.png" alt=""></div>
    <div class="point__content--text">
      <span>CHANDRA POINT</span>
      <h2>CHANDRAの特徴</h2>
      <p>CHANDRAでは中小企業向けに低価格でホームページを持つことができるように、サブスクリプション型（月額定額制）のホームページ運用サービスを提供しています。</p>
      <ul>
        <li>サブスク型にすることで初期費用を抑え低価格でホームページを制作</li>
        <li>お客様専任のウェブ担当者を配属​することでお客様のビジネスの変化に合わせた柔軟な運用を提供</li>
        <li>不満な点があればいつでも解約OK!</li>
      </ul>
    </div>
  </section>

  <section id="service">
    <div class="section__title">
      <span>SERVICE</span>
      <h2>CHANDRAのサービス</h2>
      <div class="service__contents">
        <div class="service__content">
          <h2>サブスク型</br>ホームページ制作</h2>
          <div class="service__content-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-production.png" alt=""></div>
          <p>初期費用0円、月々10,000円からご利用可能なホームページ制作サービス</p>
          <div class="service__button">
            <a href="#">詳しくみる</a>
          </div>
        </div>
        <div class="service__content">
          <h2>Web担当者</br>代行サービス</h2>
          <div class="service__content-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-operation.png" alt=""></div>
          <p>ホームページの更新から集客などWebマーケティング業務の代行サービス</p>
          <div class="service__button">
            <a href="#">詳しくみる</a>
          </div>
        </div>
        <div class="service__content">
          <h2>Web担当者</br>代行サービス</h2>
          <div class="service__content-image"><img src="<?php echo get_template_directory_uri(); ?>/images/icon-wordpress.png" alt=""></div>
          <p>ホームページの更新から集客などWebマーケティング業務の代行サービス</p>
          <div class="service__button">
            <a href="#">詳しくみる</a>
          </div>
        </div>
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
  <section id="column">
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
            <p><?php the_excerpt(); ?></p>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </section>
  <?php endif; ?>

  <?php if( have_posts() ): ?>
  <section id="news">
    <div class="section__title">
      <span>NEWS</span>
      <h2>お知らせ</h2>
      <ul class="news__wrapper">
        <?php while( have_posts() ): the_post(); ?>
        <?php
        $categories = get_the_category();
        $category_link = get_category_link( $categories[0]->term_id );
        $category_name = $categories[0]->name;
        ?>
        <li class="news__list"><a href="<?php the_permalink(); ?>"><span class="news__category"><?php echo $category_name; ?></span><span class="news__date"><?php echo get_the_date(); ?></span><?php echo get_the_title(); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
  </section>
  <?php endif; ?>

  <?php get_footer(); ?>
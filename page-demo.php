<?php get_header(); ?>

<main>
	<section class="header__title">
		<span>DEMO</span>
		<h2>デモサイト</h2>
	</section>

	<section id="lite" class="demo__content">
	<div class="plan__content-wrap">
		<div class="plan__content">
			<div class="plan__title">
				<h3>カフェデモ</h3>
			</div>
			<div class="plan__price">
				<p>月額<span class="plan__price--span">10,000</span>円</p>
				<span>（税込み11,000円）</span>
			</div>
			<ul>
				<li>更新代行（月/1回）</li>
				<li>ページ数1</li>
				<li>サーバー管理</li>
				<li>ドメイン取得代行</li>
				<li>セキュリティ設定</li>
				<li>スマホ対応</li>
				<li>サポート</li>
				<li>お問い合わせフォーム</li>
			</ul>
		</div>
	</div>
		<div class="demo__img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/demo-cafe.png" alt="">
			<div class="service__button">
				<a href="https://web.chandra-inc.com/demo02/">デモサイトを見る</a>
			</div>
		</div>
	</section>

	<section id="standard" class="demo__content">
	<div class="plan__content-wrap">
		<div class="plan__content">
			<div class="plan__title">
				<h3>焼肉店デモ</h3>
			</div>
			<div class="plan__price">
				<p>月額<span class="plan__price--span">30,000</span>円</p>
				<span>（税込み33,000円）</span>
			</div>
			<ul>
				<li>更新代行（月/3回）</li>
				<li>ページ数1</li>
				<li>お知らせ機能</li>
				<li>サーバー管理</li>
				<li>ドメイン取得代行</li>
				<li>セキュリティ設定</li>
				<li>スマホ対応</li>
				<li>サポート</li>
				<li>お問い合わせフォーム</li>
			</ul>
		</div>
	</div>
		<div class="demo__img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/demo-yakiniku.png" alt="">
			<div class="service__button">
				<a href="https://web.chandra-inc.com/demo01/">デモサイトを見る</a>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
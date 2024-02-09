<?php get_header(); ?>

<main>
	<section class="header__title">
		<span>DEMO</span>
		<h2>デモサイト</h2>
	</section>

	<section id="lite" class="demo__content">
		<div class="demo__item">
			<div class="plan__content">
				<div class="plan__title">
					<h3>ライトプランデモ</h3>
				</div>
				<div class="demo__img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/demo-lite.png" alt="">
				</div>
				<div class="plan__price">
					<p>月額<span class="plan__price--span">9,800</span>円</p>
					<span>（税込み10,780円）</span>
				</div>
				<div class="service__button">
					<a href="https://web.chandra-inc.com/demo02/" target="_blank">デモサイトを見る</a>
				</div>
			</div>
		</div>
		<div class="demo__item">
			<div class="plan__content">
				<div class="plan__title">
					<h3>スタンダードプランデモ</h3>
				</div>
				<div class="demo__img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/demo-standard.png" alt="">
				</div>
				<div class="plan__price">
					<p>月額<span class="plan__price--span">14,800</span>円</p>
					<span>（税込み16,280円）</span>
				</div>
				<div class="service__button">
					<a href="https://web.chandra-inc.com/demo01/" target="_blank">デモサイトを見る</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
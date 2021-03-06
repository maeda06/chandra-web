<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chandra-web</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sp.css">
    <?php if( is_single() || is_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
    <?php endif; ?>
    <?php if( is_page( "service" ) || is_page( "demo" ) ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service.css">
    <?php endif; ?>
		<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="株式会社chandra"></a></div>
  <nav class="pc-nav">
    <ul>
      <li><a href="#">ホーム</a></li>
      <li><a href="#">機能・料金</a></li>
      <li><a href="#">デモサイト</a></li>
      <li><a href="#">よくある質問</a></li>
      <li><a href="#">役立ちコラム</a></li>
    </ul>
  </nav>

  <div class="hamburger">
  <span></span>
  <span></span>
  <span></span>
  </div>

  <nav class="globalMenuSp">
      <ul>
        <li><a href="#">ホーム</a></li>
        <li><a href="#">機能・料金</a></li>
        <li><a href="#">デモサイト</a></li>
        <li><a href="#">よくある質問</a></li>
        <li><a href="#">役立ちコラム</a></li>
      </ul>
  </nav>
</header>
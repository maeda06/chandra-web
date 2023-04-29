<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chandra-web</title>
    <?php if( is_front_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/firstview.css" />
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/asset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
    <?php if( is_page( "service" ) || is_page( "demo" ) ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service.css">
    <?php endif; ?>
    <?php if( is_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css">
    <?php endif; ?>
    <?php if( is_archive() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sp.css">
		<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

<?php if( is_front_page() ) : ?>
<div id="logo_loader" class="open">
  <div class="f_logo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="chandra">
  </div>
</div>
<?php endif; ?>
<header class="pc-nav">
  <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="株式会社chandra"></a></div>
  <nav>
    <?php
    $setting = array(
      'theme_location'  => 'header_menu',
    );
    wp_nav_menu( $setting );
    ?>
  </nav>

  <div class="button">
    <p>お気軽にお問合せください！</p>
    <a href="contact/">お問い合わせはコチラ</a>
  </div>
  <?php // 現在使用しているテンプレートファイル名を表示
  global $template; // テンプレートファイルのパスを取得
  $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
  echo '現在使用しているテンプレートファイル：'.$temp_name; // ファイル名の表示
?>
</header>

  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>

<header class="sp-nav">
  <nav class="globalMenuSp">
    <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo_web.png" alt="株式会社chandra"></a></div>
    <?php
      $setting = array(
        'theme_location'  => 'header_menu',
      );
      wp_nav_menu( $setting );
      ?>
    <div class="button">
      <p>お気軽にお問合せください！</p>
      <a href="contact/">お問い合わせはコチラ</a>
    </div>
  </nav>
</header>
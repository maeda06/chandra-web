<?php
add_theme_support('post-thumbnails');
add_action( 'init', 'create_post_type' );

function create_post_type() {
register_post_type(
	'column',
	array(
		'label' => 'コラム',
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions'
		),
		'show_in_rest' => true,
	)
);

register_taxonomy(
	'column-cat',
	'column',
	array(
		'hierarchical' => true,
		'update_count_callback' => '_update_post_term_count',
		'label' => 'カテゴリー',
		'singular_label' => 'カテゴリー',
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
	)
);

register_taxonomy(
	'column-tag',
	'column',
	array(
		'label' => 'タグ',
		'hierarchical' => false,
		'public' => true,
		'show_in_rest' => true,
	)
);

register_post_type(
	'works',
	array(
		'label' => '制作実績',
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions'
		),
		'show_in_rest' => true,
	)
);

register_taxonomy(
	'works-cat',
	'works',
	array(
		'hierarchical' => true,
		'update_count_callback' => '_update_post_term_count',
		'label' => 'カテゴリー',
		'singular_label' => 'カテゴリー',
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
	)
);

}

function twpp_change_excerpt_length( $length ) {
  return 50; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

//サイドバーにウィジェット追加
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'サイドバー',
		'id' => 'sidebar',
		'description' => 'サイドバーウィジェット',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
 ));

 function create_menu_area() {
	register_nav_menu( 'header_menu', 'ヘッダー表示メニュー' );
	register_nav_menu( 'footer_menu', 'フッター表示メニュー' );
}

add_action( 'after_setup_theme', 'create_menu_area' );
}

//リダイレクト停止 
remove_action( 'template_redirect', 'wp_old_slug_redirect' );
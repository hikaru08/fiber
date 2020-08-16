
<?php 

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );

		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );

		//自作スクリプトや、jQueryのライブラリも同様に読み込みます。
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/javascript/slide.js', array(), '1.0.0', true );
		wp_enqueue_script( 'script-name', get_template_directory_uri() . '/javascript/header.js', array(), '1.0.0', true );
		wp_enqueue_script( 'slick.min', get_stylesheet_directory_uri().'/slick/slick.min.js', array( 'jquery' ), '1.8.1', true);
	}
}
function load_css() {
	$dir = get_stylesheet_directory_uri();
	wp_enqueue_style('town-css', $dir . '/stylesheets/header.css', array(), filemtime(get_stylesheet_directory() . '/stylesheets/header.css'));
	wp_enqueue_style( 'original-styles', get_stylesheet_directory_uri() . '/stylesheets/header.css', array(),  true);
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/stylesheets/reset.css', "", '20200804' );
	wp_enqueue_style( 'header', get_template_directory_uri() . '/stylesheets/header.css', "", '20200804' );
	wp_enqueue_style( 'index', get_template_directory_uri() . '/stylesheets/index.css', "", '20200804' );
	wp_enqueue_style( 'creator', get_template_directory_uri() . '/stylesheets/creator.css', "", '20200804' );
	wp_enqueue_style( 'member', get_template_directory_uri() . '/stylesheets/member.css', "", '20200804' );
	wp_enqueue_style( 'works', get_template_directory_uri() . '/stylesheets/works.css', "", '20200804' );
	wp_enqueue_style( 'works-detail', get_template_directory_uri() . '/stylesheets/works-details.css', "", '20200804' );
	wp_enqueue_style( 'airticle', get_template_directory_uri() . '/stylesheets/article.css', "", '20200804' );
	wp_enqueue_style( 'page', get_template_directory_uri() . '/stylesheets/page.css', "", '20200804' );
	wp_enqueue_style( 'contact', get_template_directory_uri() . '/stylesheets/contact.css', "", '20200804' );
	wp_enqueue_style( 'slider-zoom', get_template_directory_uri() . '/stylesheets/slider-zoom.css', "", '20200804' );
	wp_enqueue_style( 'company', get_template_directory_uri() . '/stylesheets/company.css', "", '20200804' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css', "", '20200804' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css', "", '20200804' );
}
add_action( 'init', 'load_js' );
add_action( 'css' , 'load_css');
// ブログのアイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
// カスタムメニューを使用可能にする
add_theme_support("menus")
?>
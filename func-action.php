<?php

//禁用emoji表情
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//去除头部冗余代码 4.5更新
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

//禁用feed
add_action('do_feed', 'zYwp_disable_feed', 1);
add_action('do_feed_rdf', 'zYwp_disable_feed', 1);
add_action('do_feed_rss', 'zYwp_disable_feed', 1);
add_action('do_feed_rss2', 'zYwp_disable_feed', 1);
add_action('do_feed_atom', 'zYwp_disable_feed', 1);
//禁用feed
function zYwp_disable_feed() {
	wp_die(__('<h1>本博客不再提供 Feed，请访问网站<a href="'.get_bloginfo('url').'">首页</a>！</h1>'));
}

//修改登录界面LOGO
add_action('login_head', 'my_custom_login_logo');
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { display:block !important; width: 280px !important;background-size: 280px 80px!important; background-image:url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
    </style>';
}
function custom_loginlogo_url($url) {
    return home_url();
}

//禁用 图片 srcset 移动设备分级加载
add_filter( 'wp_calculate_image_srcset', 'disable_srcset' );
function disable_srcset( $sources ) {
	return false;
}

// 隐藏WP版本号
remove_action( 'wp_head',   'wp_generator' );

//去除自带js
wp_deregister_script( 'l10n' );


//移除 Open-Sans 在线字体服务
add_action('wp_default_styles','inn_open_sans_remover');
function inn_open_sans_remover($styles){
	$registered = $styles->registered;
	foreach($registered as $k => $v){
		$remove_key = array_search('open-sans',$v->deps);
		if($remove_key !== false) unset($registered[$k]->deps[$remove_key]);
	}
}

//启用特色图像功能，并且自定义图像尺寸
add_theme_support( 'post-thumbnails' );

//为没有特征图的文章指定默认图像
add_filter( 'post_thumbnail_html', 'my_post_thumbnail_html' );
function my_post_thumbnail_html( $html ) {
    if ( empty( $html ) )
        $html = '<img src="' .  get_stylesheet_directory_uri() . '/images/thumbnail.jpg' . '" alt="" />';
    return $html;
}

//增加缩略图尺寸
//set_post_thumbnail_size( 300, 200 );// 默认特色图像尺寸
//add_image_size( 'yunzhao', 300, 450 ); // 孕照类目 特色图像尺寸

//隐藏admin Bar
add_filter('show_admin_bar','hide_admin_bar'); 
function hide_admin_bar($flag) {
	return false;
}

//增强编辑器开始
add_filter('tiny_mce_before_init', 'custum_fontfamily');
function custum_fontfamily($initArray){
   $initArray['font_formats'] = "微软雅黑='微软雅黑';宋体='宋体';黑体='黑体';仿宋='仿宋';楷体='楷体';隶书='隶书';幼圆='幼圆';";
   return $initArray;
}

add_filter("mce_buttons_3", "add_editor_buttons");
function add_editor_buttons($buttons) {
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'backcolor';
	$buttons[] = 'underline';
	$buttons[] = 'hr';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'cut';
	$buttons[] = 'copy';
	$buttons[] = 'paste';
	$buttons[] = 'cleanup';
	$buttons[] = 'wp_page';
	$buttons[] = 'newdocument';
	return $buttons;
}

?>
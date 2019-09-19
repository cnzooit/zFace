<?php 

require_once(TEMPLATEPATH . '/func-action.php');
require_once(TEMPLATEPATH . '/includes/theme_setup.php');	

//管理员加载模块
if(is_admin())
	require_once(TEMPLATEPATH . '/includes/theme_setup.php');	

//后台调用图片上传功能需要的库
global $pagenow;
if ( is_admin() ) {
	if (get_bloginfo('version') >= 3.5) {
		if( $pagenow!='post-new.php' and $pagenow!='post.php' )//编辑分类的时候选择图片需要
			wp_enqueue_media();//5.0以上版本，注释掉本行，否则编辑文章时看不到“上传到本文章的”
		wp_enqueue_script('jzl_custom_fields_js', get_template_directory_uri(). '/includes/uploader-3.6.js');
	}else {
		wp_enqueue_style('thickbox');
		wp_enqueue_script('thickbox');
		wp_enqueue_script('jzl_custom_fields_js', get_template_directory_uri(). '/includes/uploader-3.5.js');
	}
}


?>
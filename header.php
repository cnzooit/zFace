<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/js/jquery-1.12.1.min.js"></script>
<!-- swiper代码 开始 -->
<script src="<?php echo get_template_directory_uri(); ?>/includes/js/swiper.min.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/swiper.min.css" rel="stylesheet" type="text/css" />
<!-- swiper代码 结束 -->
<?php wp_head(); ?>
</head>

<body>

<?php 
	global $options;
	$options = get_option('zFace_Options');		
?>

<div id="head">
	<div id="header">

		<div id="logo">
			<a class="logo" href="<?php	echo home_url();	?>">
				<img src="<?php echo $options['logo']; ?>" title="<?php bloginfo('name'); ?>">
			</a>			
		</div>

		<div id="slogan">
			<span><?php echo $options['logo_title']; ?></span>
		</div>

	</div>
</div>

<?php
/** zuluo options */
class zuluoOptions {
	function getOptions() {
		$options = get_option('zFace_Options');
		if (!is_array($options)) {

			$options['logo'] = get_template_directory_uri() . '/images/logo.png';
			$options['logo_title'] = '崇德尚志 博学笃行';

			$options['slider_img1'] = get_template_directory_uri() . '/images/slider/1.jpg';
			$options['slider_title1'] = '图片说明';
			$options['slider_link1'] = home_url();
			$options['slider_img2'] = get_template_directory_uri() . '/images/slider/2.jpg';
			$options['slider_title2'] = '图片说明';
			$options['slider_link2'] = home_url();
			$options['slider_img3'] = get_template_directory_uri() . '/images/slider/3.jpg';
			$options['slider_title3'] = '图片说明';
			$options['slider_link3'] = home_url();
			$options['slider_img4'] = get_template_directory_uri() . '/images/slider/4.jpg';
			$options['slider_title4'] = '图片说明';
			$options['slider_link4'] = home_url();
			$options['slider_img5'] = get_template_directory_uri() . '/images/slider/5.jpg';
			$options['slider_title5'] = '图片说明';
			$options['slider_link5'] = home_url();

			$options['web_title1'] = '初中部';
			$options['web_link1'] = home_url();
			$options['web_title2'] = '高中部';
			$options['web_link2'] = home_url();

			$options['foot_copyright'] = 'Copyright © '.date('y'). bloginfo( 'name' );

			update_option('zFace_Options', $options);
		}
		return $options;
	}

	function add() {
		if(isset($_POST['zuluo_save'])) {
			$options = zuluoOptions::getOptions();

			//顶部设置
			$options['logo'] = stripslashes($_POST['logo']);
			$options['logo_title'] = stripslashes($_POST['logo_title']);

			//首页设置
			$options['slider_img1'] = stripslashes($_POST['slider_img1']);
			$options['slider_title1'] = stripslashes($_POST['slider_title1']);
			$options['slider_link1'] = stripslashes($_POST['slider_link1']);
			$options['slider_img2'] = stripslashes($_POST['slider_img2']);
			$options['slider_title2'] = stripslashes($_POST['slider_title2']);
			$options['slider_link2'] = stripslashes($_POST['slider_link2']);
			$options['slider_img3'] = stripslashes($_POST['slider_img3']);
			$options['slider_title3'] = stripslashes($_POST['slider_title3']);
			$options['slider_link3'] = stripslashes($_POST['slider_link3']);
			$options['slider_img4'] = stripslashes($_POST['slider_img4']);
			$options['slider_title4'] = stripslashes($_POST['slider_title4']);
			$options['slider_link4'] = stripslashes($_POST['slider_link4']);
			$options['slider_img5'] = stripslashes($_POST['slider_img5']);
			$options['slider_title5'] = stripslashes($_POST['slider_title5']);
			$options['slider_link5'] = stripslashes($_POST['slider_link5']);

			$options['web_title1'] = stripslashes($_POST['web_title1']);
			$options['web_link1'] = stripslashes($_POST['web_link1']);
			$options['web_title2'] = stripslashes($_POST['web_title2']);		
			$options['web_link2'] = stripslashes($_POST['web_link2']);
			
			$options['foot_copyright'] = stripslashes($_POST['foot_copyright']);

			update_option('zFace_Options', $options);

		} else {
			zuluoOptions::getOptions();
		}

		add_theme_page('主题设置', '主题设置', 'edit_themes', basename(__FILE__), array('zuluoOptions', 'display'));
	}

	function display() {
		$options = zuluoOptions::getOptions();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/font-awesome.css"/>
<style type="text/css">
/* Shows the same border as on front end */
form {
	margin: 0 0 0 0;
	padding: 0 0 0 0;
	width:1000px;
}
.title {
	float:left;
	margin:20px 0 0 10px;
	padding:0 0 0 0;
	width:100%;
	height:60px;
	background:url(<?php echo get_bloginfo('template_url'); ?>/images/setup_title.png) no-repeat 0 0px;
}
.title a {
	float:left;
	margin:26px 0 0 200px;
	color:#FFF;
	font-size:12px;
	font-family: '微软雅黑';
	text-shadow: 0 1px 0 #888;
	text-decoration:none;
}
.wrap {
	float:left;
	margin: 0 0 0 10px;
	padding: 0 0 0 0;
	width:100%;
	border: 1px solid #844921;
	background-color: #FFFFFF;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
p.submit1 {
	width:100%;
	text-align:right;
	clear:both;
	margin: 0 0 0 0;
	padding: 10px 20px 10px 0;
	border-bottom: 1px solid #E3E3E3;
	background-color: #F5F5F5;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
p.submit2 {
	width:100%;
	text-align:right;
	clear:both;
	margin: 0 0 0 0;
	padding: 10px 20px 10px 0;
	border-top: 1px solid #E3E3E3;
	background-color: #F5F5F5;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
p.submit1 span {
	float:left;
	margin: 5px 0 0 20px;
	line-height:20px;
	font-size:16px;
	font-family: '微软雅黑';
	text-shadow: 0 1px 0 #eee;
	text-decoration:none;
}
p.submit1 input, p.submit2 input {
	cursor: pointer;
	font-size: 12px;
	color: #444;
	text-shadow: 0 1px 0 white;
	background: #F3F3F3;
	border: 1px solid #BBB;
	padding: 5px 10px 3px 10px;	
}
p.submit1 input:hover, p.submit2 input:hover {
	color: black;
	border-color: #666;	
}

.f_right {
	float:right;
	margin: 8px;
}
#lmenu {
	float:left;
	margin: 0 0 0 0;
	padding: 0 0 20px 0;
	width: 20%;
}
#lmenu ul {
	margin: 0 0 0 0;
	padding: 0 0 0 0;
}
#lmenu ul li {
	margin: 0 0 0 0;
	padding: 0 0 0 0;
}
#lmenu ul li a {
	display: block;
	padding: 8px 10px;
	color: #21759B;
	text-shadow: 0 1px 0 white;
	border-top: 1px solid #fff;
	border-right: 1px solid #E3E3E3;
	border-bottom: 1px solid #E3E3E3;
	background-color: #F5F5F5;
	color: #21759B;
	text-decoration: none;
}
#lmenu ul li a i {
	display: inline-block;
	margin-right: 8px;
	width: 16px;
	height: 16px;
	color: #999;
	font-size: 14px;
}
#lmenu ul li a:hover {
	background-color: #EAF2FA;
	color: #555;
}
#lmenu ul li a.current {
	border-right: 1px solid #FFFFFF;
	background-color: #FFFFFF;
	color: #D54E45;
	font-weight: bold;
}
#lmenu ul li a.out {
	background-color: #F5F5F5;
	color: #21759B;
}
#lmenu ul li a.out:hover {
	background-color: #EAF2FA;
	color: #555;
}
#main {
	float:left;
	overflow: hidden;
	margin: 0 0 0 0;
	padding: 0 20px 20px 23px;
	width: 80%;
	min-height:320px;
	max-height: 800px;
	background-color: #FFFFFF;
	overflow-y: auto;
	overflow-x: hidden;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
label {
	padding:0px;
	margin:0px;
	color:#aaa;
	font-weight: normal;
}
ul.block {
	clear:both;
	min-height:30px;
	margin:0 0 0 0px;
	padding:0 0 0 0;
	display:none;
}
ul.block h2 {
	margin: 0 0 10px 0;
	line-height:25px;
	font-size:14px;
	font-weight:bold;
	border-bottom:1px solid #eee;
}
ul.block li {
	float:left;
	margin: 0 0 10px 0;
	width:100%;
}
.item_left {
	float:left;
	overflow:hidden;
	width:550px;
	color: #333;
	padding: 0 0 0 0;
}
.item_right {
	float:left;
	overflow:hidden;
	width:140px;
	color: #555;
	font-size:14px;
	padding: 3px 0 0 10px;
}
input.input {
	padding: 4px;
	width: 95%;
	background: #fafafa;
	border-style: solid;
	border-width: 1px;
	border-color: #BBB #EEE #EEE #BBB;
	color: #666;
}
input:hover.input, input:focus.input {
	color: #333;
	background: white;
}
.textarea {
	border: 1px solid #ccc;
	height:70px;
	width: 95%;
	line-height:16px;
}
.option-checkbox {
	border: none;
	max-height: 140px;
	height: auto !important;
	height: expression( document.body.clientHeight > 140 ? "140px" : "auto" );
	overflow-y: scroll;
	overflow-x: hidden;
}
.option-checkbox .element {
	float:left;
	padding: 5px 0 0 0;
	width: 215px;
}
label {
	margin: 4px 0 0 0;
	padding: 4px 0 0 0;
	color: #333;
}
.select {
	width: 350px;
}

</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/includes/js/jquery-1.7.2.min.js"></script>
<script language="JavaScript">
//点击标题隐藏下方表格
function hide(num) {
/*	var menuitems = document.getElementsByName("menuitem");
	for(var i=0;i<=menuitems.length;i++) {
		menuitems[i].className="out";
	}
	document.getElementById('block'+num).style.display="block";
	document.getElementById("menuitem"+num).className="current";

	var blocks = document.getElementsByName("block");
	for(var i=0;i<=blocks.length;i++) {
		menuitems[i].style.display="none";
	}*/
	$("#lmenu li a").attr("class","out");
	$("#menuitem"+num).attr("class","current");

	$("#main ul").css("display","none");
	$("#block"+num).css("display","block");}
</Script>
<?php

	$blocks[] = array(
			'block_title'	=>	'<i class="fa fa-cogs"></i>顶部设置',
			'block_descrip'	=>	'顶部设置',
			'block_detail'	=>	array(
				array(
					'type'		=>	'uploader',
					'title'		=>	'顶部logo',
					'title2'	=>	'顶部logo',
					'label'		=>	'请填写图片URL地址',
					'name'		=>	'logo',
					'value'		=>	$options['logo']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'Logo右侧文字',
					'label'		=>	'请填写文字内容',
					'name'		=>	'logo_title',
					'value'		=>	$options['logo_title']					
				)
			)		
		);

	$blocks[] = array(
			'block_title'	=>	'<i class="fa fa-image"></i>首页幻灯大图',
			'block_descrip'	=>	'首页幻灯大图',
			'block_detail'	=>	array(
				array(
					'type'		=>	'uploader',
					'title'		=>	'图片一地址',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_img1',
					'value'		=>	$options['slider_img1']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片一说明',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_title1',
					'value'		=>	$options['slider_title1']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片一链接',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_link1',
					'value'		=>	$options['slider_link1']					
				),
				array(
					'type'		=>	'uploader',
					'title'		=>	'图片二地址',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_img2',
					'value'		=>	$options['slider_img2']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片二说明',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_title2',
					'value'		=>	$options['slider_title2']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片二链接',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_link2',
					'value'		=>	$options['slider_link2']					
				),
				array(
					'type'		=>	'uploader',
					'title'		=>	'图片三地址',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_img3',
					'value'		=>	$options['slider_img3']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片三说明',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_title3',
					'value'		=>	$options['slider_title3']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片三链接',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_link3',
					'value'		=>	$options['slider_link3']					
				),
				array(
					'type'		=>	'uploader',
					'title'		=>	'图片四地址',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_img4',
					'value'		=>	$options['slider_img4']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片四说明',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_title4',
					'value'		=>	$options['slider_title4']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片四链接',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_link4',
					'value'		=>	$options['slider_link4']					
				),
				array(
					'type'		=>	'uploader',
					'title'		=>	'图片五地址',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_img5',
					'value'		=>	$options['slider_img5']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片五说明',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_title5',
					'value'		=>	$options['slider_title5']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'图片五链接',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'slider_link5',
					'value'		=>	$options['slider_link5']					
				)
			)		
		);

	$blocks[] = array(
			'block_title'	=>	'<i class="fa fa-code"></i>子站链接设置',
			'block_descrip'	=>	'子站链接设置',
			'block_detail'	=>	array(
				array(
					'type'		=>	'text',
					'title'		=>	'子站标题1',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'web_title1',
					'value'		=>	$options['web_title1']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'子站链接1',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'web_link1',
					'value'		=>	$options['web_link1']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'子站标题2',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'web_title2',
					'value'		=>	$options['web_title2']					
				),
				array(
					'type'		=>	'text',
					'title'		=>	'子站链接2',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'web_link2',
					'value'		=>	$options['web_link2']					
				)
			)		
		);

	$blocks[] = array(
			'block_title'	=>	'<i class="fa fa-anchor"></i>底部内容设置',
			'block_descrip'	=>	'底部内容设置',
			'block_detail'	=>	array(
				array(
					'type'		=>	'textarea',
					'title'		=>	'版权信息',
					'title2'	=>	'',
					'label'		=>	'',
					'name'		=>	'foot_copyright',
					'value'		=>	$options['foot_copyright']					
				)
			)		
		);

?>

<form action="#" method="post" enctype="multipart/form-data" name="zuluo_form" id="zuluo_form">
<div class="title"></div>

<div class="wrap">

	<p class="submit1"><span>主题设置</span><input type="submit" name="zuluo_save" value="保存设置" /></p>

	<div id="lmenu">
		<ul>
<?php
	$num = 0;
	foreach($blocks as $block) {
		if($num == 0) $aclass = 'current';
		else $aclass = 'out';
?>
		<li><a href="#" class="<?php echo $aclass; ?>" id="menuitem<?php echo $num; ?>" onclick="hide(<?php echo $num; ?>);" title="<?php echo $block['block_descrip']; ?>"><?php echo $block['block_title']; ?></a></li>
<?php		
		$num = $num + 1;
	}
?>
		</ul>
	</div>

	<div id="main">

<?php
	$num = 0;
	foreach($blocks as $block) {
?>
		<ul class="block" id="block<?php echo $num; ?>" <?php if($num == 0) echo 'style="display:block;"'; ?>>
		<?php
			foreach($block['block_detail'] as $item) {
				echo '<li><h2>'.$item['title'].'</h2>';
				echo '<div class="item_left">';

				switch($item['type']):
					case 'text':
						echo '<input class="input" type="text" name="'.$item['name'].'" class="code" size="70%" value="'.$item['value'].'">';
						break;
					case 'text-readonly':
						echo '<input class="input" type="text" name="'.$item['name'].'" class="code" size="70%" value="'.$item['value'].'" readonly="readonly">';
						break;
					case 'textarea':
						echo '<textarea class="textarea" name="'.$item['name'].'">'.$item['value'].'</textarea>';
						break;
					case 'uploader':
						echo '<input class="input" type="text" name="'.$item['name'].'" class="code" size="70%" value="'.$item['value'].'" style="width: 85%;">';
						echo '<input type="button" value="上传" class="jzl_bottom" style="width: 10%;"/>'; 
						break;
					case 'checkbox':
						echo '<input type="checkbox" name="'.$item['name'];
						if($item['value']) echo '" value="checkbox" checked="checked"> '.$item['title'];
						else echo '"> '.$item['title'];
						break;
					case 'checkbox-cat':
						echo '<div class="option-checkbox">';

						global $wpdb;
						$request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
						$request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
						$request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' and $wpdb->term_taxonomy.parent = 0";
						$request .= " ORDER BY term_id asc";
						$categorys = $wpdb->get_results($request);
						foreach ($categorys as $category) {
							echo '<div class="element2">';
								echo '<input type="checkbox" name="'.$item['name'].'[]"';
								if(in_array($category->term_id,explode(',',$item['value'])))
									echo ' checked="checked"';
								echo '" value="'.$category->term_id.'"> ';
								echo '<label for="'.$item['name'].'">'.$category->name.'</label>';							
							echo '</div><div class="clear"></div>';

							//获得子分类
							$request_sub = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
							$request_sub .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
							$request_sub .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' and $wpdb->term_taxonomy.parent = ";
							$request_sub .= $category->term_id;
							$request_sub .= " ORDER BY term_id asc";
							$categorys_sub = $wpdb->get_results($request_sub);
							foreach ($categorys_sub as $category_sub) {								
								echo '<div class="element2">';
								echo '&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="'.$item['name'].'[]"';
								if(in_array($category_sub->term_id,explode(',',$item['value'])))
									echo ' checked="checked"';
								echo '" value="'.$category_sub->term_id.'"> ';
								echo '<label for="'.$item['name'].'">'.$category_sub->name.'</label>';							
								echo '</div><div class="clear"></div>';	

								//获得子分类
								$request_sub_sub = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
								$request_sub_sub .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
								$request_sub_sub .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' and $wpdb->term_taxonomy.parent = ";
								$request_sub_sub .= $category_sub->term_id;
								$request_sub_sub .= " ORDER BY term_id asc";
								$categorys_sub_sub = $wpdb->get_results($request_sub_sub);
								foreach ($categorys_sub_sub as $category_sub_sub) {								
									echo '<div class="element2">';
									echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="'.$item['name'].'[]"';
									if(in_array($category_sub_sub->term_id,explode(',',$item['value'])))
										echo ' checked="checked"';
									echo '" value="'.$category_sub_sub->term_id.'"> ';
									echo '<label for="'.$item['name'].'">'.$category_sub_sub->name.'</label>';							
									echo '</div><div class="clear"></div>';

									//获得子分类
									$request_sub_sub_sub = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
									$request_sub_sub_sub .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
									$request_sub_sub_sub .= " WHERE $wpdb->term_taxonomy.taxonomy = 'category' and $wpdb->term_taxonomy.parent = ";
									$request_sub_sub_sub .= $category_sub_sub->term_id;
									$request_sub_sub_sub .= " ORDER BY term_id asc";
									$categorys_sub_sub_sub = $wpdb->get_results($request_sub_sub_sub);
									foreach ($categorys_sub_sub_sub as $category_sub_sub_sub) {								
										echo '<div class="element2">';
										echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="'.$item['name'].'[]"';
										if(in_array($category_sub_sub_sub->term_id,explode(',',$item['value'])))
											echo ' checked="checked"';
										echo '" value="'.$category_sub_sub_sub->term_id.'"> ';
										echo '<label for="'.$item['name'].'">'.$category_sub_sub_sub->name.'</label>';							
										echo '</div><div class="clear"></div>';							
									}								
								}								
							}
						}

						echo '</div>';
						break;
					case 'checkbox-link':
						echo '<div class="option-checkbox">';

						global $wpdb;
						$request = "SELECT $wpdb->terms.term_id, name FROM $wpdb->terms ";
						$request .= " LEFT JOIN $wpdb->term_taxonomy ON $wpdb->term_taxonomy.term_id = $wpdb->terms.term_id ";
						$request .= " WHERE $wpdb->term_taxonomy.taxonomy = 'link_category' and $wpdb->term_taxonomy.parent = 0";
						$request .= " ORDER BY term_id asc";
						$categorys = $wpdb->get_results($request);
						foreach ($categorys as $category) {
							echo '<div class="element2">';
								echo '<input type="checkbox" name="'.$item['name'].'[]"';
								if(in_array($category->name,explode(',',$item['value'])))
									echo ' checked="checked"';
								echo '" value="'.$category->name.'"> ';
								echo '<label for="'.$item['name'].'">'.$category->name.'</label>';							
							echo '</div><div class="clear"></div>';
						}

						echo '</div>';
						break;
					case 'radio':
						foreach($item['values'] as $value => $word) {							
							echo '<input type="radio" name="'.$item['name'].'" value="'.$value.'" ';
							if($value==$item['value'])
								echo 'checked';								
							echo '>'.$word.'&nbsp;&nbsp;';		
						}
						break;
				endswitch;

				echo '</div>';
				echo '<div class="item_right">'.$item['label'].'</li>';
			}
		?>
		</ul>
<?php		
		$num = $num + 1;
	}
?>
	</div>

	<p class="submit2"><input type="submit" name="zuluo_save" value="保存设置" /></p>

</div>

</form>

<?php
	}
}

// Register functions
add_action('admin_menu', array('zuluoOptions', 'add'));

/** l10n */
function theme_init(){
	load_theme_textdomain('zuluo', get_template_directory() . '/languages');
}
add_action ('init', 'theme_init');

?>

<?php get_header(); ?>

<?php
	global $paged, $options;
?>

<div class="slider"> 
	<div class="content5" id="changjing">
		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">

			<?php 
				for($i=1;$i<11;$i++) {
					if($options['slider_img'.$i]<>'') {
				?>
				<div class="swiper-slide" style="background-image:url(<?php echo $options['slider_img'.$i]; ?>); background-repeat:no-repeat;background-position:center; background-size:cover;">
					<div class="wenzi">
						<div class="wenzi1 ani" swiper-animate-effect="slideInLeft" swiper-animate-duration="1s" swiper-animate-delay="0s">
							<div class="wenzi1-1"><?php if($options['slider_link'.$i]) echo'<a href="'.$options['slider_link'.$i].'">'; ?><?php echo $options['slider_titleb'.$i]; ?><?php if($options['slider_link'.$i]) echo'</a>'; ?></div>
						</div>
						<div class="wenzi2 ani" swiper-animate-effect="slideInLeft" swiper-animate-duration="1s" swiper-animate-delay="0.15s">
							<?php echo $options['slider_titles'.$i]; ?><br />
						</div>
					</div>
				</div>
				<?php
					}
				}
			?>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div> 
			<!-- Add Arrows -->
			<div class="lunyou"></div>
			<div class="lunzuo"></div>
		</div>
	</div>
</div> 

<script type="text/javascript">
	var swiper = new Swiper('.content5 .swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
		speed:700,
		effect : 'slide',
        loop: true,
        autoplay: 5000
		});
	
	$('.lunyou').click(function(){
		swiper.slidePrev();
	})
	
	$('.lunzuo').click(function(){
		swiper.slideNext();
	})	
	
</script> 


<div id="bottom">	
	<div id="foot_navi">
		<a href="<?php echo $options['web_link1']; ?>"><?php echo $options['web_title1']; ?></a>
		<a href="<?php echo $options['web_link2']; ?>"><?php echo $options['web_title2']; ?></a>
	</div>

	<div id="foot_copy">			
		<?php echo apply_filters('the_content', $options['foot_copyright']); ?> 
	</div>
</div>

</body>
</html>
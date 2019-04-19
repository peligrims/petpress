<?php if (!defined('FW')) die('Forbidden'); ?>

<?php if (isset($data['slides'])): ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.nivoSlider').nivoSlider({effect:'fade'});
		});
	</script>
	<!--Slider-->
	<section class="wrap-nivoslider theme-default">
	<div class="top_block">
		  <div class="slider-relative">
		    <div class="slider-block">
		      <div class="slider">
			        <ul class="items">		
						<div class="nivoSlider">
							<?php foreach ($data['slides'] as $id => $slide): ?>
							<img  width="<?php echo esc_attr($dimensions['width']); ?>"
							      height="<?php echo esc_attr($dimensions['height']); ?>"
							      src="<?php echo esc_attr(fw_resize($slide['src'], $dimensions['width'], $dimensions['height'], true)); ?>"
							      alt="<?php echo esc_attr($slide['title']); ?>"
							      title="#nivo-<?php echo esc_attr($id); ?>" />
							       
							<?php endforeach; ?>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</div>
		
		<?php foreach ($data['slides'] as $id => $slide): ?>
			<div class="top_block">
  				<div class="slider-relative">
    				<div class="slider-block">
      					<div class="slider">
							<div id="nivo-<?php echo esc_attr($id) ?>" class="nivo-html-caption">
								<?php if (empty($slide['desc'])): ?>
									<div class="banner"><?php echo $slide['title'] ?></div>
								<?php else: ?>
									<div class="banner"><?php echo $slide['title'] ?> - <?php echo $slide['desc'] ?></div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</section>
	<!--/Slider-->
<?php endif; ?>

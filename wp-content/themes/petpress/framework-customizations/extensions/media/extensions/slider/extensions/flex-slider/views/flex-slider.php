<?php if (!defined('FW')) die('Forbidden'); ?>
<!--<?php debug ($data ['slides']); ?>-->


<?php if($data['slides']): ?>
    <div class="top_block">
        <div class="slider-relative">
        	<div class="slider-block">
        		<div class="slider">
		            <ul class="items">
		                <?php foreach ($data['slides'] as $slide): ?>
		                <li style="background-image: url(<?php echo $slide['src'] ?>);">
		                    <div class="overlay-gradient"></div>
		                    <div class="container">
		                        <div class="row">
		                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
		                                <div class="slider-text-inner">
		                                    <h1><?php echo $slide['title'] ?></h1>
		                                    <h2><?php echo $slide['desc'] ?></h2>
		                                    <?php if( !empty($slide['extra']['link'])  && !empty($slide['extra']['link_title'] )): ?>
		                                    <p><a class="btn btn-primary btn-lg" href="<?php echo $slide['extra']['link'] ?>"><?php echo $slide['extra']['link_title'] ?></a></p>
		                                    <?php endif; ?>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </li>
		                <?php endforeach; ?>
		            </ul>
        		</div>
    		</div>
    	</div>
    </div>
<?php endif; ?>



<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

?>

<script>
	$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 3,
                max: 3
            },
            height: 'auto',
            width: 300,
        },
        responsive: true,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: true,
            onTouch: true
        }
    	});
	});	
</script>		





<div class="content page1">
  <div class="container_12">
    <div class="grid_12"> <a href="#" class="next"></a><a href="#" class="prev"></a>
      <h2>Pets for Adoption</h2>
    </div>
    <div class="clear"></div>
    <ul class="carousel1">
      <li class="grid_4"> <img src="<?php echo esc_attr($atts['img1']); ?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Praesent quis orcidiam viverralopr </a></p>
          Raes quis orci eget diam viverralopr con equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo. </div>
      </li>
      <li class="grid_4"> <img src="<?php echo esc_attr($atts['img2']); ?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
      <li class="grid_4"> <img src="<?php echo esc_attr($atts['img3']); ?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Tyeraesent quis hojo rcieget iam iverralji.</a></p>
          Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk equat. Usce sagittis ki quam ihui hyhy opirp. </div>
      </li>
      <li class="grid_4"> <img src="<?php echo esc_attr($atts['img3']); ?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
      <li class="grid_4"> <img src="<?php echo esc_attr($atts['img3']); ?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
      <li class="grid_4"> <img src="<?php echo esc_attr($atts['img3']); ?>" alt="" class="img_inner fleft">
        <div class="extra_wrapper pad1">
          <p class="col2"><a href="#">Aeraesent quis hoj rcieget diam iverral.</a></p>
          Loaesent quis orci diam viverralopr con equat. Lusce sagittis quam ihui hyhy opir pulvinarhjk velit. </div>
      </li>
    </ul>
  </div>
</div>
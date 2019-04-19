<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam, eveniet iusto molestiae nulla provident quas quod repellendus, sed sunt vel voluptate. Corporis deleniti dolorum mollitia possimus quo quod reiciendis.</p>

<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * @var array $atts
 */

?>
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="<?php echo $atts['url'] ?>" allowfullscreen></iframe>
</div>

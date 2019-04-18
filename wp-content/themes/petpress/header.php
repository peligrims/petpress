<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Law
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body  class="page1" <?php body_class(); ?>>

 <div class="container_12">
        <div class="grid_12">            
            <div><a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt=""></a></div>
            <div class="menu_block">
                <nav>
                   
                        <?php wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                          	'container' => false,
                            'walker' => new Petpress_Header_Menu,
                            'menu_class' => 'sf-menu',
    						'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        ) ) ?>
                                                                             
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

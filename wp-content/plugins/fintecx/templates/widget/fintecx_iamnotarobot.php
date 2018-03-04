<?php
/**
 * The template for displaying demo plugin content.
 * **************  OVERIDDEN ********  CUSTOMIZED *************************
 * Override this template by copying it to yourtheme/dc-product-vendor/widget/store-location.php
 *
 * @author 		WC Marketplace
 * @package 	dc-product-vendor/Templates
 * @version     0.0.1
 */
extract( $instance );
global $fintecxPlugin;
//  $fintecxPlugin is instanciated in fintecx-plugin.php

?><div class="fintecx-iamnotarobot-wrapper">
		<div class="flipthis" ></div>
		<a href="<?php echo $qrcode ?>" target="_blank"><?php _e( 'FintecX Iamnotarobot', 'fintecx' ) ?></a>
                <div class="example switch">
  <div>
    <p class="turnBoxButton">OFF</p>
  </div>
  <div>
    <p class="turnBoxButton turnBoxButtonPrev">ON</p>
  </div>
</div>

</div>
<?php 
wp_add_inline_script( 'flipit', 
  '(function ($) {
    $(".flipthis").turnBox({
    width:200,
    height:50,
    axis:"X",
    perspective:800,
    duration:200,
    delay:0,
    easing:"linear",
    direction:"positive",
    type:"real"
    
       });
})(jQuery)');
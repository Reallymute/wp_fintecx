<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
$.fn.center = function () {
this.css("position","absolute");
this.css("top", Math.max(0, (
($(window).height() - $(this).outerHeight()) / 2) + 
$(window).scrollTop()) + "px"
);
this.css("left", Math.max(0, (
($(window).width() - $(this).outerWidth()) / 2) + 
$(window).scrollLeft()) + "px"
);
return this;
}
function zuu() {
$("#billy").html("got click");
  $("#mp_splash").fadeOut();
}
 
</script>
<style>
#mp_splashoverlay{
display: none;
position: fixed;
top: 0%;
left: 0%;
width: 100%;
height: 100%;
background-color: black;
opacity: 0.5;
z-index:1001;
}
#mp_splash{ 
position: absolute;
display: none;
width: 600px;
height: 300px;
padding: 16px;
border: 16px solid orange;
background-color: white;
background-image: http://icons.iconarchive.com/icons/cornmanthe3rd/plex/128/System-settings-icon.png;
z-index:1002;
}
</style>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="col-full">
		</div>
            
            <div class="mp-storefront-header">
                <div class="mp-storefront-header-col-1"><?php if (dynamic_sidebar('fintecx_widgets_header_col_1')) : else : endif; ?></div>
                <div class="mp-storefront-header-col-2"><?php if (dynamic_sidebar('fintecx_widgets_header_col_2')) : else : endif; ?></div>
                <div class="mp-storefront-header-col-3"><?php if (dynamic_sidebar('fintecx_widgets_header_col_3')) : else : endif; ?></div>
                
                
            </div>
 <?php
 /*if (dynamic_sidebar('fintecx_widgets_header_col_1') || 
       dynamic_sidebar('fintecx_widgets_header_col_2') ||
       dynamic_sidebar('fintecx_widgets_header_col_3') 
    )
 { echo '<div class="mp-storefront-header">';
     if (dynamic_sidebar('fintecx_widgets_header_col_1')) {
        echo ' <div class="mp-storefront-header-col-1">';
        dynamic_sidebar('fintecx_widgets_header_col_1');
   
     echo '</div>';
 }
         
     if (dynamic_sidebar('fintecx_widgets_header_col_2')) {
        echo ' <div class="mp-storefront-header-col-2">';
        dynamic_sidebar('fintecx_widgets_header_col_2');
   
     echo '</div>';
 }
     if (dynamic_sidebar('fintecx_widgets_header_col_3')) {
        echo ' <div class="mp-storefront-header-col-3">';
        dynamic_sidebar('fintecx_widgets_header_col_3');
   
     echo '</div>';
 }
    echo '</div>';
    
    }
  * 
  */ 

			
			/**
			 * Functions hooked into storefront_header action
			 *
			 * @hooked storefront_skip_links                       - 0
			 * @hooked storefront_social_icons                     - 10
			 * @hooked storefront_site_branding                    - 20
			 * @hooked storefront_secondary_navigation             - 30
			 * @hooked storefront_product_search                   - 40
			 * @hooked storefront_primary_navigation_wrapper       - 42
			 * @hooked storefront_primary_navigation               - 50
			 * @hooked storefront_header_cart                      - 60
			 * @hooked storefront_primary_navigation_wrapper_close - 68
			 */
			do_action( 'storefront_header' ); ?>


	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 */
	do_action( 'storefront_before_content' ); ?>
<p id="billy" >Cliquez sur la zone grisée</p>
<div id="mp_splashoverlay" > </div>
<div id="mp_splash" >Bienvenu dans FintecX
</div>
<script>
//$("#mp-splashoverlay").show();
//$("#mp-splash").show().center();

setTimeout(function(){ 
$("#mp_splashoverlay").fadeIn();
}, 3000);
setTimeout(function(){ 
$("#mp_splash").fadeIn();
}, 3500);
$("#mp_splash").click(function(){
  $("#billy").html("got click");
  $("#mp_splash").fadeOut();
});
$("#mp_splashoverlay").click(function(){
    var div = $("#mp_splash");
  //  		div.animate({height: '200px'}, "slow");
       
  //     div.html(div.html+ "<br>" + div.attr("height"));
       $("#billy").html($("#mp_splash").height() + " / " + $("#mp_splash").css("display"));
setTimeout(function(){ 
$("#mp_splashoverlay").fadeOut();
}, 300);
});
</script>
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		/**
		 * Functions hooked in to storefront_content_top
		 *
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'storefront_content_top' );

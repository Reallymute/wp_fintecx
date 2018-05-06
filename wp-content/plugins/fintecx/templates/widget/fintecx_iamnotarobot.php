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

?>
<?php 

wp_add_inline_script( 'flipit', 
  'jQuery(".flipthis").on("click",function() {
    turnBox({
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
       } );');
/*
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
*/

?>

<div class="fintecx-iamnotarobot-wrapper">
		<div  ></div>
		<a href="<?php echo $qrcode ?>" target="_blank"><?php _e( 'Cliquez Ici <br> Widget FintecX I am not a robot', 'fintecx' ) ?></a>
<div class="flipthis" >
  <div>
    <p class="turnBoxButton">OFF</p>
  </div>
  <div>
    <p class="turnBoxButton turnBoxButtonPrev">ON</p>
  </div>
    <button id="qrcode_btn">Convertir en QRcode</button>
    <h1 id="control1">Control text</h1>
</div>

</div>
<script type="text/javascript">
    
/*
 * on attend ceci
 * { "json_content" : 
 *      { "server_response" : "UVJfRU5DT0RFO01lcmNoYW50LElEPTc5NzIzNjgzNzQ2ODYy
 *      Mzg3NDY0fEFVVEhUT0tFTjtUb2tlbj0xMDA5NjAzNXxRUkNPREVfRklMRV9OQU1FO0ZpbGV
 *      uYW1lPURFZmF1bHQgRmlsZXxRUkNPREVfUkVTVUxUX1VSTDtVUkw9fEVORF9RU
 *      l9FTkNPREU=Server : reallymute-app.herokuapp.com", 
 *      "received_query" : "QRCODE_GENERATOR" , 
 *      "json_security_token" : "AB67844D981EF554314F20180321174358" 
 *      } 
 *  }    
    */
   
             jQuery(document).ready(function ($) {
        alert("After click");
       document.getElementById('control1').innerHTML="Doc is Ready!";
        
        $("#qrcode_btn").click(function() {
             alert("inside click");
       document.getElementById('control1').innerHTML="Ready For Click result";
       $.ajaxSetup({
  headers : {   
    'Access-Control-Allow-Origin' : '*'
  }
});
        $.getJSON("<?php echo $qrcode ?>",function(data,status) {
            var contr = document.getElementById('control1');
            contr.innerHTML = data.json_content.server_response;
        });
        var conuuu = document.getElementById('control1');
        conuuu.innerHTML="getJSON was processed... more 06may";

    });
    });

    // a href="https://reallymute-app.herokuapp.com/HandleServerRequest?servercmd=QRCODE_GENERATOR" target="_blank">Cliquez Ici <br> Widget FintecX I am not a robot</a>
    /*
    $(".flipthis").on("click",function() {
    $(".turnBoxButton").turnBox({
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
       } ); 
       */
          </script>
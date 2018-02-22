<!DOCTYPE html>
<html>
<head>
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
opacity: 0.8;
z-index:1001;
}
#mp_splash{ 
position: absolute;
display: none;
width: 360px;
height: 101px;
padding: 16px;
border: 16px solid orange;
background-color: white;
background-image: http://icons.iconarchive.com/icons/cornmanthe3rd/plex/128/System-settings-icon.png;
z-index:1002;
}
</style>
</head>
<body>

<p id="billy" >Click the button to wait 3 seconds, then alert "Hello".</p>
<div id="mp_splashoverlay" > </div>
<div id="mp_splash" > FintecX
<button >Login</button>
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
  //     $("#billy").html("remplace");

if ($("#mp_splash").css("display") == "none") {
$("#mp_splash").fadeIn();
}
else {
    if ($("#mp_splash").height() != 200) {
        		div.animate({height: '200px'}, "slow");
            }
            else     {
    		div.animate({height: '100px'}, "slow");
            
            } 
      }
});
</script>
</body>
</html>

jQuery(document).ready(function(){
  jQuery( window ).off().resize(function() { jQuery('.video-over-cover').css({'height': jQuery('#video').height() }) });
});
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('goldfish/js/browse.js') }}?v={{CMSHelper::settings('cacheVar')}}"></script>
    <script src="{{ asset('goldfish/js/client.js') }}?v={{CMSHelper::settings('cacheVar')}}"></script>
    <script src="{{ asset('goldfish/js/goldfish.js') }}?v={{CMSHelper::settings('cacheVar')}}"></script>
    <link href="{{ asset('goldfish/css/client.css') }}?v={{CMSHelper::settings('cacheVar')}}" rel="stylesheet">
    <title>{{CMSHelper::settings('hotelname')}} - Hotel</title>
  </head>
  
  
  <body oncontextmenu="return false;">
  <script language="JavaScript">
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
   <div class="onlineCounter"><span><b id="onlinecount">{{CMSHelper::online()}}</b> Online Now</span></div>
    <iframe src="/cdn_luna/index.html?sso={{ Auth::user()->auth_ticket }}" id="flash-container" width="100%" height="100%" frameborder="0"></iframe>
  </body>
</html>
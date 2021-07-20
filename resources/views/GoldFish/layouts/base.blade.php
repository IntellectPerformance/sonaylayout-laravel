<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{CMSHelper::settings('hotelname')}} - @yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('luna/css/discord.css') }}?v={{CMSHelper::settings('cacheVar')}}" rel="stylesheet">
    <link href="{{ asset('luna/css/main.css') }}?v={{CMSHelper::settings('cacheVar')}}" rel="stylesheet">
    <link href="{{ asset('luna/css/lunaprofile.css') }}?v={{CMSHelper::settings('cacheVar')}}" rel="stylesheet">
    <link href="{{ asset('luna/css/style.css') }}?v={{CMSHelper::settings('cacheVar')}}" rel="stylesheet">
    <script src="{{ asset('luna/js/loadhandler.js') }}?v={{CMSHelper::settings('cacheVar')}}" defer></script>
    <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}?v={{CMSHelper::settings('cacheVar')}}" defer></script>
    <script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  </head>
  
  
  
  <body>
  <div id="page-wrap">
    <div class="header">
    
      @if (!Auth::user())
      <body class="guest">
      
      @endif
	  
	  
      <div id="loading"><center><div id="container-load"></div><img style="position: relative; top: 250px;" src="https://habbofont.net/font/habbo_new_big/luna.gif"></img></center><h1 style="position: absolute; left: 45%; top: 550px;">Luna Laden...</h1></div>
      <div class="container relative">
      
        <div class="logo">
          <a href="/me" class="left"><img src="https://habbofont.net/font/habbo_new_big/luna.gif"/></a>
          <div class="online no-mobile"><span id="onlinecount">{{CMSHelper::online()}}</span> Online Now</div>
        </div>
        <div class="right @guest regbutton @endguest">
          @if (Auth::user())
            <ul class="header_options">
              <li class="settings left" onclick="window.location.href='/settings'"></li>
              <li class="logout left" onclick="window.location.href='/logout'"></li>
            </ul>
          
          
        </div>
        @else
        <a class="btn big green" href="{{ route('register') }}">Join now!</a>
        @endif
        </div>
      </div>
    </div>
  @include('partials.navbar')
    <main class="py-4">
        @yield('content')
    </main>
  </div>
  @include('partials.footer')
  <script>

</script>

<style>
#loading {
  display: flex;
  position: fixed;
  z-index: 100;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.8);
  
  background-image: url("/GoldFish/images/loading.gif");
  background-repeat: no-repeat;
  background-position: center;
}
/* width */
::-webkit-scrollbar {
  width: 6px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
</body>
</html>

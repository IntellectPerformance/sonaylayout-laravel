<div class="box habbos">
<div id="content-box" style="max-height:300px">
    <div class="title-box png20" style="background-color:#00796B;background-image:url(/templates/yada/img/party.png);background-repeat: no-repeat;background-position: right;height: 80px;">
		<div class="title"><font color="white">Random {{CMSHelper::settings('hotelname')}}'s</font></div>
			<div class="desc"><font color="white">4 Random {{CMSHelper::settings('hotelname')}}'s! </font></div>
		</div>
      @foreach(\App\Models\user\User::inRandomOrder()->take(4)->get() as $habbo)
	  <div class="content habbogrid">
      <span onclick="window.location.href='{{ route('home', [$habbo->username]) }}'" class="ahabbo" onmouseover="openMouth('#habbo{{$habbo->id}}')" onmouseout="closeMouth('#habbo{{$habbo->id}}')">
	  
        <div class="legacy-tooltip">
          <span>{{$habbo->username}}</span>
          <span>{{$habbo->motto}}</span>
        </div>
        <img id="habbo{{$habbo->id}}" src="{{CMSHelper::settings('habbo_imager')}}{{$habbo->look}}?direction=4"/>
      </span>
      @endforeach
    </div>
  </div>
  <script>
  var interval = null;
  function openMouth(img) {
    var old = $(img).attr('src');
    $(img).attr('src',old+'&action=wav&head_direction=3&gesture=sml&frame=1');
    interval = setInterval(function(){
      var str = $(img).attr('src');
      if(str.includes("&frame=1")) {
        $(img).attr('src',old+'&action=wav&head_direction=3&gesture=sml&frame=2');
      } else if(str.includes("&frame=2")) {
        $(img).attr('src',old+'&action=wav&head_direction=3&gesture=sml&frame=1');
      }
    }, 240);
  }
  function closeMouth(img) {
    var old = $(img).attr('src');
    var res = old.replace("&action=wav&head_direction=3&gesture=sml", "");
    if(old.includes("&frame=1")) {
      res = old.replace("&action=wav&head_direction=3&gesture=sml&frame=1", "");
    } else {
      res = old.replace("&action=wav&head_direction=3&gesture=sml&frame=2", "");
    }
    $(img).attr('src',res);
    clearInterval(interval);
  }
  </script>
  
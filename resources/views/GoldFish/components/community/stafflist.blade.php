<div class="container">
	<div class="row">
	
	@foreach(App\Models\User\Permissions::where('id', '>=', 3)->orderBy('id','desc')->get() as $rank)
                <div class="col-12">
				<hr>
                    <div id="title-headline">{{$rank->rank_name}}</div>
					
                </div>
            </div>
            <div class="row">
			
            @forelse(App\Models\User\User::where('rank', '=', $rank->id)->get() as $habbo)
			
                <div class="col-4">

                    <a href='/home/{{$habbo->username}}' class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div style="border-radius: 10px;" class="work"><img src="{{CMSHelper::settings('c_images')}}album1584/HS1.gif"></div><div class="username">{{$habbo->username}}</div><div class="avatarimage" style="background-image:url(https://habbo.nl/habbo-imaging/avatarimage?figure={{CMSHelper::settings('habbo_imager')}}{{$habbo->look}}&size=l)"></div></div></div>
                        
                        <div class="clear"></div>
                        <div class="png" style="height: 54px">
                            <div class="motto">{{$habbo->motto}}</div>
                            <div class="online-status" style="color: gray;"><b>@if ($habbo->online == '1')online @else offline @endif</b></div>
                            <div class="clear"></div>
                        </div>
                    </a>
					
                </div>
				
			@empty
				<div class="col-4">
                    <a href='#' class="staff-box">
                        <div class="staff-header"><div class="header"></div><div class="overlay"><div class="work"><img src="{{CMSHelper::settings('c_images')}}album1584/HS1.gif"></div><div class="username">Open Spot</div><div class="avatarimage" style="background-image:url(https://habbo.nl/habbo-imaging/avatarimage?figure=hd-180-1.hr-831-61.ch-265-66.lg-280-110.sh-305-62&size=l)"></div></div></div>
                        
                        <div class="clear"></div>
                        <div class="png" style="height: 54px">
                            <div class="motto">Solliciteer voor: <b>{{$rank->rank_name}}</b></div>
                            <div class="online-status"></div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </a>
                </div>
			@endforelse
@endforeach
            </div>
		</div>
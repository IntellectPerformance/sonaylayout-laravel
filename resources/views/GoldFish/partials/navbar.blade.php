<center>
<div id="header-menu">	
	<div class="row">
	@if (Auth::user())
		</div>
	<div class="col-3">		
	</div>
		<div class="col-8">
			<ul class="navigation">
			<div class="col-3">	
					</div>
					<li>
					<img style="position: relative; top: -31px;" src="https://habbo.com/habbo-imaging/avatarimage?figure={{ Auth::user()->look }}&action=sit,wav&gesture=sml&direction=2&head_direction=3&size=n&img_format=png"> <a style="position: relative; top: -23px;" href="/me">{{ Auth::user()->username }}<span></span></a>
				</li>
				<li>
					<a href="/community">Community<span></span></a>
					</li>
						<li>
							<a href="/community/staff">Medewerkers<span></span></a>
						</li>
						<li>
						@if(CMSHelper::fuseRights('dashboard'))
					<li><a href="/housekeeping">Housekeeping</a></li>
				@endif
					
					</li>
						@endif
						
					</ul>
					
				</div>
				<div class="col-8">
					<ul class="navigation">
						<li>
						@if (!Auth::user())
				<a href="/" @if($group == 'home') class="selected" @endif>Gast</a>
					<a href="/community">Community<span></span></a>
						</li>
						<li>
							<a href="/community/staff">Medewerkers<span></span></a>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
</center>

	


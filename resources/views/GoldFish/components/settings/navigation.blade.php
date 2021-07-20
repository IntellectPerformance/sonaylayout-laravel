<div id="shadow-box" style="max-height:100%;">
					<div class="title-box png20" style="background-color:#7B1FA2;background-image:url(/templates/yada/img/disco.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Navigatie</font></div>
						<div class="desc2"><font color="white">Instellingen op {{CMSHelper::settings('hotelname')}}!</font></div>
					</div>
					<div style="max-height:100%; text-align: center;" class="png20 stataantal">
                   <span>Jouw Website Weergave Veranderen</span>
                    <a href="{{ route('settings') }}">
                        <button style="font-size:15px; width:100%" class="btn big green">Preview Veranderen</button>
                    </a>
					<hr>
					<span>Veranderen Van Wachtwoord</span>
					 <a href="{{ route('settings_password') }}">
                        <button style="font-size:15px; width:100%" class="btn big green">Wachtwoord Veranderen</button>
                    </a>
					</div>
				</div>
<div class="row">
        <div class="col-6">
            <div id="shadow-box" class="profile" style="min-height: 330px;">
                <div style="" style="min-height: 330px;"></div>
                <div class="overlay" style="background-image:url(/Luna/images/me/views/{{Auth()->User()->hotelview}}); min-height: 330px;">
                    <div class="avatar-image" style="background-image:url(https://habbo.nl/habbo-imaging/avatarimage?figure={{ Auth::user()->look }}&size=l&head_direction=2&gesture=sml)"></div>

                    <div class="username">Hey, {{ Auth::user()->username }}!</div>
                    <div class="motto"><i>{{ Auth::user()->motto }}</i></div>

                    <div class="last-online">
					{{date('F d, Y h:ia', Auth::user()->last_login)}}
					</div>
                </div>
                <div style="clear:both"></div>
            </div>
			<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#7B1FA2;background-image:url(/Luna/images/community_tab.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Jouw currency op {{CMSHelper::settings('hotelname')}}</font></div>
						<div class="desc2"><font color="white">Hoeveel heb jij?</font></div>
					</div>
					<div  class="png20 stataantal">
					<SCRIPT>
function ShowRadioButtonDiv (IdBaseName, NumberOfButtons) {
    for (x=1;x<=NumberOfButtons;x++) {
        CheckThisButton = IdBaseName + x;
        ThisDiv = IdBaseName + x +'Div';
    if (document.getElementById(CheckThisButton).checked) {
        document.getElementById(ThisDiv).style.display = "block";
        }
    else {
        document.getElementById(ThisDiv).style.display = "none";
        }
    }
    return false;
}
</SCRIPT>
				<FORM  style="border: 1px solid #0000; ">
					<div style="display: inline-block; margin: 0 40px 0 0;">
					<INPUT style="float: left;"TYPE="radio" NAME="RadioGroupName" ID="GroupName1" ONCLICK="ShowRadioButtonDiv('GroupName', 3)"/>Normale Currency<BR>
					<INPUT TYPE="radio" NAME="RadioGroupName" ID="GroupName2" ONCLICK="ShowRadioButtonDiv('GroupName', 3)"/>Soon<BR>
					</div>
				</FORM>
					<div style="color: white; top: -60px; position: relative; float: right; border: 2px solid; width: 120px; height: 70px; text-align: center; border-radius: 6px; background-image: url(/Luna/images/me/views/view_us_wide.png);">
					
                        <div id="GroupName1Div" style="display:none;"><b><img src="/Luna/images/currency/credits.png" width="15px"> {{ Auth()->User()->credits }}</b><br><b><img src="/Luna/images/currency/duckets.png" width="15px"> {{ (!empty(Auth()->User()->duckets->amount) ? Auth()->User()->duckets->amount : '0') }}</b><br><b><img src="/Luna/images/currency/diamonds.png" width="14px" title="SS Punten"> {{ (!empty(Auth()->User()->diamonds->amount) ? Auth()->User()->diamonds->amount : '0') }}</b></div>
						<div id="GroupName2Div" style="display:none;">Binnenkort</div>
						</div>
					</div>
					</div>
					
				<style>
				#luna-flexbox-container {
					display: flex;
					width: 700px;
				}
				
				.luna-flexbox-container-item {
					border: 1px solid #0000;
					color: rgb(255,255,255);
					padding: 1px;
					
				}
					
				</style>

	</div>
        <div class="col-6">
				
			<div id="shadow-box" style="background-color:#52be80;background-image:url(/Luna/images/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/client?v=1.0-beta" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Naar {{CMSHelper::settings('hotelname')}}</font></div>
						<div class="desc"><font color="white" style="color: white">en speel met alle andere {{CMSHelper::settings('hotelname')}}'s!</font></div>
					</div>
					</a>
				</div>
				<div id="luna-flexbox-container">
				<div class="luna-flexbox-container-item">
				<div id="shadow-box" style="background-color:red;background-image:url(/Luna/images/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="/client?Engine_Name=LunaEngineV1.0" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Naar Luna Discord</font></div>
						<div class="desc"><font color="white" style="color: white">en chat met meer {{CMSHelper::settings('hotelname')}} spelers!</font></div>
					</div>
					</a>
				</div>
				</div>
				<div class="luna-flexbox-container-item">
				<div id="shadow-box" style="background-color:blue;background-image:url(/Luna/images/naarhotel.png);background-repeat: no-repeat;background-position: right;height: 95px;">
					<a href="https://lunahotel.nl/setup/LunaSetup.exe" target="_blank" style="text-decoration:none">
					<div class="title-box png20">
						<div class="title">
						<font color="white" style="color: white;font-size: 175%">
						Download {{CMSHelper::settings('hotelname')}} App</font></div>
						<div class="desc"><font color="white" style="color: white">en speel {{CMSHelper::settings('hotelname')}} via de officiele app!</font></div>
					</div>
					</a>
				</div>
				</div>
			</div>
				<div id="shadow-box" style="max-height:100%">
					<div class="title-box png20" style="background-color:#7B1FA2;background-image:url(/Luna/images/community_tab.png);background-repeat: no-repeat;background-position: right;height: 80px;">
						<div class="title2"><font color="white">Zoek naar een {{CMSHelper::settings('hotelname')}}</font></div>
						<div class="desc2"><font color="white">Zoek functie van {{CMSHelper::settings('hotelname')}}!</font></div>
					</div>
					<div class="png20 stataantal">
                        @include('components.search')
					</div>
				</div>
				</div>
			</div>
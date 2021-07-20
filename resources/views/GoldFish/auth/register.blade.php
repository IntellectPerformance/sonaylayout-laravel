@extends('layouts.base')
@section('title', 'Register')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-4">
		
        <form method="POST" action="{{ route('register') }}">
                        @csrf
				
				
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Algemene Benodigde Gegevens</div>
                </div>
                <div class="png20">
				
				<label>E-mailadres</label>
                @error('mail')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="mail" type="email" class="form-control @error('mail') is-invalid @enderror" name="mail" value="{{ old('mail') }}" required autocomplete="email">
                        <p class="desc">Via jouw e-mailadres kun je je  account dubbel beveiligen.</p>
                
                </div>
            </div>
						</div>
            
                        <div class="col-8">
                                            
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Account Beveiliging</div>
                </div>
					<div class="png20">
                        <label>{{CMSHelper::settings('hotelname')}} Naam</label>
                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>
                        <p class="desc">Kies een mooie naam, deze kan je later namelijk niet meer veranderen!</p>
                        
                        <label>Wachtwoord</label>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <p class="desc">Kies een wachtwoord dat lastig te raden is, maar wel makkelijk voor jou te onthouden is.</p>
                        
                        <label>Wachtwoord Herhalen</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <p class="desc">Herhaal even je wachtwoord, dit is puur voor de veiligheid!</p><br>
                        
                        

                        <a href="/" class="btn red back-register">Annuleren</a>
                        <button type="submit" class="btn green next-register">
                                    {{ __('Register') }}
                                </button>
                        <!-- ik heb oprecht geen idee of dit werkt omdat deze versie de versie was die nog niet openbaar was -->

                        <div style="clear:both"></div>
                </div>
                </div>
            </div>
            
        </di
</div>
@endsection

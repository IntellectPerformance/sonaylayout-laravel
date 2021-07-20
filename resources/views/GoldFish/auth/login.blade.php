@extends('layouts.base')
@section('title', 'Login')
@section('content')
<div class="container">
	<div class="row">
    <div class="col-4">
		<div id="shadow-box">
      <div class="title-box png20">
        <div class="title">Welkom (Terug) op</div>
        </div>
          <div class="png20" style="text-align: center;">
				<img src="https://habbofont.net/font/habbo_new_big/luna.gif">
                </div>
            </div>
						</div>
	
          <div class="col-8">                       
						<div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Account Login</div>
                </div>
					<div class="png20">
          <form method="POST" id="loginForm"{{(CMSHelper::settings('maintenance') == 0 ? 'action='.route('login') : '')}}>
              @csrf
              <div class="login-input">
              <input id="username" type="text" placeholder="Luna Naam" class="form-control input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            </div>
            <div class="login-input">
              <input id="password" type="password" placeholder="Luna Wachtwoord" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
              <button type="submit" id="login" class="btn green next-register">
                  {{ __('Login') }}
              </button>
            </form>

              <div style="clear:both"></div>
          </div>
		  
        </div>
		
        </div>    
    </div>
	</form>
</div>

@endsection

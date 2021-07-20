@extends('layouts.base')
@section('content')
@section('title', 'Me')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-danger" role="alert">
	  <center>
	  <h2>Hotel is in onderhoud</h2>
		<style>
		.adminLogin {
		display: none;
		}	
		</style>
		
		<script>
	$(document).ready(function(){
		$('#adminLoginEnable').click(function(){
			$('.adminLogin').toggle(500);
			});
		});
		</script>
	  <button id="adminLoginEnable" class="btn big green">Personeel?</button>
            <form class="adminLogin" style="width: 20%;" method="POST" id="loginForm"{{(CMSHelper::settings('maintenance') == 0 ? 'action='.route('login') : '')}}>
              @csrf
              <div class="login-input">
              <input placeholder="Gebruikersnaam" id="username" type="text" class="form-control input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            </div>
            <div class="login-input">
              <input placeholder="Wachtwoord" id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
              <button type="submit" id="login" class="btn big red">
                  {{ __('Login') }}
              </button>
            </form>
			
			</center>
      </div>
    </div>
  </div>
</div>
@endsection

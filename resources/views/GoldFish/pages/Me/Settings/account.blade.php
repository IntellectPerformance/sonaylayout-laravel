@extends('layouts.base')
@section('content')
@section('title', 'Settings')
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      @include('components.settings.navigation')
    </div>
    <div class="col-lg-8">
      <div id="shadow-box">
                <div class="title-box png20">
                    <div class="title">Wachtwoord Veranderen</div>
                </div>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
      @if (Session::has('message'))
      <div class="alert alert-success">{{ Session::get('message') }}</div>
      @endif
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form id="form-change-password" role="form" method="POST" novalidate class="form-horizontal">
              <label for="current-password" >Current Password</label>
              <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
              </div>
              <p class="desc" for="password" >New Password</p>
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <label for="password_confirmation" >Re-enter Password</label>
              <div class="form-group">
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
              </div>
              <div class="form-group">
               <center> <button class="btn green next-register" type="submit">Verander Nu</button> </center>
              </div>
              @csrf
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

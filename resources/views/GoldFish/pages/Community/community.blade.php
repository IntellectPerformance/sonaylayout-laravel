@extends('layouts.base')
@section('content')
@section('title', 'Community')
<div class="container">
		<div class="row">
    <div class="col-lg-8">
      <div id="news-content">
      @include('components.news')
    </div>
    <div class="col-lg-4">
      @include('components.community.randomhabbos')
    </div>
  </div>
</div>
@endsection

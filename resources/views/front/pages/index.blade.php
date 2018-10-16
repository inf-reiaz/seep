@extends('front.app.layout')

@section('title')
	Home
@endsection

@section('content')
			
			@include('front.partials.latest_news')
			
			@include('front.partials.history')
			
			@include('front.partials.notice_bord')
			
			@include('front.partials.help_us')
			
@endsection

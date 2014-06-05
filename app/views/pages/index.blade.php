@extends('layouts.default')


@section('content')
	
	@include('layouts.partials._carousel')

    <h1>{{ Auth::check() ? "Welcome " .Auth::user()->username : "Welcome, please consider becoming a member!" }}</h1>


@stop
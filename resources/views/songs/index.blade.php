@extends('layouts.app')
@section('title','SongsHomePage')
@section('content')
<div>This is SongsHomePage</div>
<ul>
	@foreach($songs as $song)
	<li>{{$song->title}}</li>
	<li>{{$song->artist}}</li>
	@endforeach
</ul>
@endsection
@extends('layouts.app')
@section('title','Show Song')
@section('content')

<ul>
	
	<li>{{$song->title}}</li>
	<li>{{$song->artist}}</li>
	
	
</ul>
@endsection
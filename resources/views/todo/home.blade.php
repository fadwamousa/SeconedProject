@extends('styles.app')
@section('content')
<div class="col-lg-4 col-lg-offset-4">

	    <h1>To-Do-List</h1>

	    @if(session()->has('message'))
	    {{session()->get('message')}}
	    @endif
		<ul class="list-group col-lg-8">
			@foreach($todos as $todo)
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    
			    <a href="/todo/{{$todo->id}}">{{$todo->body}}</a>
			    
			    <span class="pull-right">
			    	{{$todo->created_at->diffForHumans()}}
			    </span>
			    
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    
			    <a href="/todo/{{$todo->id}}/edit">Edit</a>
			    <form method="post" action="/todo/{{$todo->id}}">
			    	@csrf
                    {{method_field('DELETE')}}
                    <button type="submit">Delete</button>
			    	
			    </form>
			    
			    
			  </li>
			  @endforeach
		</ul>
		<br>

		<a href="todo/create" class="btn btn-info">AddNew</a>
</div>
@endsection
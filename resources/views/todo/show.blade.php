@extends('styles.app')
@section('content')
<div class="col-lg-4 col-lg-offset-4">

	    <h1>To-Do-List</h1>
		<ul class="list-group">
			
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    
			    <a href="/todo/{{$todo->id}}">{{$todo->body}}</a>
			    
			    <span class="pull-right">
			    	{{$todo->created_at->diffForHumans()}}
			    </span>
			    
			  </li>
			 
		</ul>
		<br>

		<a href="todo/create" class="btn btn-info">AddNew</a>
</div>
@endsection
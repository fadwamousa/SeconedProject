@extends('styles.app')
@section('content')
<div class="col-lg-4 col-lg-offset-4">

	    <h1>Create New Item For To Do List</h1>
	    <a href="/todo" class="btn btn-info">Back</a>
<form method="post" action="/todo">
	
	<input type="hidden" name="_token" value="{{csrf_token()}}">

  <fieldset>

    <div class="form-group">
      <label for="exampleTextarea">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" name="body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@include('styles.messages')
</div>
@endsection
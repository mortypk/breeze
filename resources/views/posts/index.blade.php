@extends('posts.master')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Laravel 9 CRUD Application Tutorial</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('posts.create')}}">Create New Post</a>
	</div>
</div>
@if($message = Session::get('error'))
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>{{$message}}!</strong>
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-12">
		<table class="table table-primary">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">PostTitle</th>
		      <th scope="col">PostContent</th>
		      <th scope="col">Action</th>
		    </tr>
		  	</thead>
		  	<tbody>
	  		@if($posts->count() > 0)
			  	@foreach($posts as $post)
			    <tr>
			      <td>{{$loop->index + 1}}</td>
			      <td>{{$post->post_title}}</td>
			      <td>{{$post->post_content}}</td>
			      <td>
  	                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    	<a class="btn btn-info" href="{{ route('posts.show', $post->id) }}">Show</a>
                    	<a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
	                    @csrf
	                    @method('DELETE')
	                    <button type="submit" class="btn btn-danger">Delete</button>
                	</form>
			      </td>
			    </tr>
			    @endforeach
		    @else
		    <tr>
		      <td colspan="4">Record not found!</td>
		    </tr>
		    @endif
		  	</tbody>
		</table>
		{!! $posts->links() !!}
	</div>
</div>
@endsection
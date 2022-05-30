<x-home-master>

	@section('content')

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="{{route('user', $post->user->id)}}">{{$post->user->name}}</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at->diffForHumans()}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

        <!-- Post Content -->
        <p class="lead">{{$post->body}}</p>

        <!-- Comments Form -->
		@if(Auth::check())
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form method="post" action="{{route('admin.comments.store')}}">
              @csrf
			  <input type="hidden" name="post_id" value="{{$post->id}}">
			  <div class="form-group">
                <textarea name="body" id="body" class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
		@else
			<div class="d-grid gap-2 col-6 mx-auto">
				<a href="/login"><button class="btn btn-primary" type="button">Login for comment</button></a>
			</div>
		@endif

		@if($comments)
		@foreach($comments as $comment)
        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" height="40px" src="{{$comment->user->avatar}}" alt="">
          <div class="media-body">
            <h5 class="media-heading"><a href="{{route('user', $comment->user_id)}}">{{$comment->user->name}}</a></h5>
		  {{$comment->body}}
          </div>
		    <small>{{$comment->created_at->diffForHumans()}}</small>
        </div>
		@endforeach
		@endif


	@endsection

</x-home-master>

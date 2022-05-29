<x-home-master>

@section('content')

       <h1 class="my-4">Time line
         <small> : User's posts</small>
       </h1>

	   <!-- Blog Post -->
		@foreach($posts as $post)

       <div class="card mb-4">
         <img class="card-img-top" src="{{$post->post_image}}" alt="Card image cap">
         <div class="card-body">
           <h2 class="card-title">{{$post->title}}</h2>
           <p class="card-text">{{Str::limit($post->body, '50', '  .....')}}</p>
           <a href="{{route('post', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
         </div>
         <div class="card-footer text-muted">
           Posted on {{$post->created_at->diffForHumans()}}
           <a href="{{route('user', $post->user->id)}}">{{$post->user->name}}</a>
         </div>
       </div>

		@endforeach

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				{{$posts->render()}}
			</div>
			</div>
       </div>

@endsection

</x-home-master>

<x-admin-master>

	@section('content')

		<h1>Edit a Post</h1>

			<form method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">

			@csrf
			@method('PATCH')
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" value="{{$post->title}}" class="form-controll" id="title" size="80" aria-describedby="" placeholder="Enter title">
			</div>

			<div class="form-group">
			<div><img height="100px" src="{{$post->post_image}}" alt=""></div>
				<label for="file">File</label>
				<input type="file" name="post_image" class="form-controll-file" id="post_image">
			</div>

				<textarea name="body" class="form-control" id="body" cols="30" rows="10">{{$post->body}}</textarea>

			<button type="submit" class="btn btn-primary">Submit</button>

			</form>

	@endsection


</x-admin-master>

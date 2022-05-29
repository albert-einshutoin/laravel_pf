<x-admin-master>

	@section('content')
	<h1>Comments</h1>

	@if(session('comment-deleted'))
		<div class="alert alert-danger">{{session('comment-deleted')}}</div>
	@endif
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Comments Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Post_id</th>
                      <th>User_id</th>
                      <th>Body</th>
                      <th>Created at</th>
                      <th>Update at</th>
                      <th>Delete</th>
                      <th>View</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Post_id</th>
                      <th>User_id</th>
                      <th>Body</th>
                      <th>Created at</th>
                      <th>Update at</th>
                      <th>Delete</th>
                      <th>View</th>
                    </tr>
                  </tfoot>
				  <tbody>

					@foreach($comments as $comment)
					<tr>
					  <td>{{$comment->id}}</td>
					  <td>{{$comment->post_id}}</td>
					  <td>{{$comment->user_id}}</td>
					  <td>{{$comment->body}}</td>
					  <td>{{$comment->created_at->diffForHumans()}}</td>
					  <td>{{$comment->updated_at->diffForHumans()}}</td>
					<form method="post" action="{{route('comment.destroy', $comment->id)}}" enctype="multipart/form-data">
					@csrf
					@method('DELETE')
					  <td><button type="submit" class="btn btn-danger">Delete</button></td>
					</form>
					  <td><a href="{{route('post', $comment->post_id)}}">View Post</a></td>
					</tr>

					@endforeach

                  </tbody>
                </table>
              </div>
            </div>
		  </div>

	@endsection

</x-admin-master>

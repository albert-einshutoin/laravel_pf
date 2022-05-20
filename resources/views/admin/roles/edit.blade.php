<x-admin-master>

	@section('content')

	<h1>Edit Role : {{$role->name}}</h1>

	@if(session()->has('role-updated'))
		<div class="alert alert-success">
		{{session('role-updated')}}
		</div>
	@endif

	<div class="col-sm-6">
		<form method="post" action="{{route('roles.update', $role->id)}}">
		@csrf
		@method('PUT')

		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="{{$role->name}}">

			<button class="btn btn-primary">Update</button>
		</div>

		</form>
	</div>
	@endsection


</x-admin-master>

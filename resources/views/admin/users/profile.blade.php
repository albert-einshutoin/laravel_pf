<x-admin-master>

	@section('content')

		<h1>User Profile {{$user->name}}</h1>

		<div class="row">
			<div class="col-sm-6">

			<form method="post" action="" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail"></label>
					<input type="text" name="" class="form-controll" id="" placeholder="">
				</div>

				<div class="form-group">
					<label for=""></label>
					<input type="text" name="" class="form-controll" id="" placeholder="">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

	@endsection

</x-admin-master>

<x-admin-master>

	@section('content')

		@foreach(auth()->user()->roles as $role)
		  <h1 class="h3 mb-4 text-gray-800">Dashboard : {{$role->name}}</h1>
		@endforeach

	@endsection


</x-admin-master>

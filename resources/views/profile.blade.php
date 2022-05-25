<x-home-master>

@section('content')

     <h1>Profile</h1>

         <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                  <div class="card-body text-center">
                    <img src="{{$user->avatar}}" alt="avatar"
                      class="rounded-circle img-fluid" style="width: 200px;">
					<h5 class="my-3">{{$user->name}}</h5>
					<p class="text-muted mb-1">{{$user->email}}</p>
                    <p class="text-muted mb-4"></p>
                    <div class="d-flex justify-content-center mb-2">
                    </div>
                  </div>
                </div>
             </div>
         </div>


@endsection

</x-home-master>

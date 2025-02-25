<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('images/image.png')}}">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["user"]->id }}
        </h5>
        <p class="card-text">{{ $viewData["user"]->username }}</p>
        <p class="card-text">{{ $viewData["user"]->email }}</p>
        <p class="card-text">{{ $viewData["user"]->password }}</p>
        
      </div>
      <a href="{{route('user.delete',['id'=>$viewData["user"]->id])}}">Delete</a>
    </div>
  </div>
</div>

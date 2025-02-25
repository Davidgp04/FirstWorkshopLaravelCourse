@extends('layouts.app')
@section('title', 'User Details')
@section('subtitle', 'User Details')
@section('content')
<div class="card mb-3 shadow-sm">
  <div class="row g-0">
    <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
      <img src="{{ asset('images/image.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">User Details</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>ID:</strong> {{ $viewData["user"]->id }}</li>
          <li class="list-group-item"><strong>Username:</strong> {{ $viewData["user"]->username }}</li>
          <li class="list-group-item"><strong>Email:</strong> {{ $viewData["user"]->email }}</li>
        </ul>
        <div class="mt-3">
          <a href="{{ route('user.delete', ['id' => $viewData["user"]->id]) }}" class="btn btn-danger">
            Delete User
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

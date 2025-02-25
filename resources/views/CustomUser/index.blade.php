@extends('layouts.app')
@section('title', 'List of Users')
@section('subtitle', 'Users')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4">
  @foreach ($viewData["users"] as $user)
  <div class="col">
    <div class="card shadow-sm h-100">
      <div class="card-body text-center">
        <img src="{{ asset('images/image.png') }}" class="img-fluid rounded-circle mb-2" style="width: 80px; height: 80px;">
        <h5 class="card-title">
          <a href="{{ route('user.show', ['id' => $user->id]) }}" class="text-decoration-none">
            ID: {{ $user->id }}
          </a>
        </h5>
        <p class="card-text text-muted">Username: {{ $user->username }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection

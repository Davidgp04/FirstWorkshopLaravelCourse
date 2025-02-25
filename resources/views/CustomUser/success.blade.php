@extends('layouts.app')
@section('title', 'Success')
@section('subtitle', 'Success')
@section('content')

<div class="container text-center mt-5">
    <div class="alert alert-success shadow-sm p-4 rounded">
        <h1 class="mb-3">✅ User succesfully created</h1>
        <a href="{{ route('home') }}" class="btn btn-primary mt-3">Return to Home</a>
    </div>
</div>

@endsection

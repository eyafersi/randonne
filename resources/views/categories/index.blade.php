@extends('template.index')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Categories</h1>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0" style="background-color: #f8f9fa;">
                    <img src="{{ asset('images/' . $category->image) }}" class="card-img-top img-fluid rounded" alt="{{ $category->name }}">
                    <div class="card-body">
                        <h5 class="card-title text-secondary">{{ $category->name }}</h5>
                        <p class="card-text text-muted">{{ $category->description }}</p>
                        <a href="{{ route('categories.description', $category) }}" class="btn btn-outline-warning btn-sm">Voir</a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

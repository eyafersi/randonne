@extends('template.index')

@section('content')
    <div class="container mt-5 mb-5">
        <h1 class="mb-4 text-primary">{{ $category->name }}</h1>

        @if ($category->image)
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="{{ asset('images/' . $category->image) }}" class="card-img-top img-fluid"
                                alt="{{ $category->name }}">
                        </div>
                    </div>
                </div>

                <div class="col-3">
                </div>
            </div>
        @endif

        <div class="mb-4">
            <h3 class="text-secondary">Description</h3>
            <p class="text-muted">{{ $category->description }}</p>
        </div>

        <!-- List of Related Products -->
        <div class="mb-5">
            <h1 class="mb-4 text-center">Produits lieé</h1>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-img-container">
                                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top img-fluid"
                                    alt="{{ $product->name }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title mb-2">{{ $product->name }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($product->description, 100) }}</p>
                                <p class="card-text text-primary"><strong>${{ $product->price }}</strong></p>
                            </div>
                            <div class="card-footer text-center bg-white border-0">
                                <a href="{{ route('products') }}" class="btn btn-outline-primary btn-sm">Acheter</a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <a href="{{ route('categories') }}" class="btn btn-outline-secondary">Back to Categories</a>
    </div>
@endsection

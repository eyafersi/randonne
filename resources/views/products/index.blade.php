@extends('template.index')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Nos Produits</h1>
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-img-container">
                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top img-fluid" alt="{{ $product->name }}">
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
@endsection

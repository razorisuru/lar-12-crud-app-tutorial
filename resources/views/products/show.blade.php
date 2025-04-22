@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">Product Details</div>
  <div class="card-body">
    <h5>{{ $product->name }}</h5>
    <p>{{ $product->description }}</p>
    <p><strong>Price:</strong> ${{ $product->price }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
  </div>
</div>
@endsection

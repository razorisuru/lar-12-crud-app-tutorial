@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-header">New Product</div>
  <div class="card-body">
    <form action="{{ route('products.store') }}"
          method="POST">
      @csrf


      <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}"
               class="form-control @error('name') is-invalid @enderror">
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control">{{ old('description', ) }}</textarea>
      </div>

      <div class="mb-3">
        <label>Price</label>
        <input type="text" name="price" value="{{ old('price') }}"
               class="form-control @error('price') is-invalid @enderror">
        @error('price')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-success">
        Create
      </button>
    </form>
  </div>
</div>
@endsection

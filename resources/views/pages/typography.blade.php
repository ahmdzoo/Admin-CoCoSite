@extends('layouts.app', ['activePage' => 'produk', 'title' => 'Produk', 'navName' => 'Produk', 'activeButton' => 'laravel'])

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="#addProductModal" class="btn btn-primary mb-3" data-bs-toggle="modal">Tambah Produk Baru</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $products)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            @if ($product->image_path)
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" width="50">
                            @endif
                        </td>
                        <td>
                            <a href="#editProductModal-{{ $product->id }}" class="btn btn-sm btn-primary" data-bs-toggle="modal">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    
                    <!-- Edit Product Modal -->
                    <div class="modal fade" id="editProductModal-{{ $product->id }}" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProductModalLabel">Edit Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="name-{{ $product->id }}" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="name-{{ $product->id }}" name="name" value="{{ $product->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description-{{ $product->id }}" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="description-{{ $product->id }}" name="description" required>{{ $product->description }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price-{{ $product->id }}" class="form-label">Harga</label>
                                            <input type="number" class="form-control" id="price-{{ $product->id }}" name="price" value="{{ $product->price }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image-{{ $product->id }}" class="form-label">Gambar</label>
                                            <input type="file" class="form-control" id="image-{{ $product->id }}" name="image">
                                            @if ($product->image_path)
                                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" width="100" class="mt-2">
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Produk</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

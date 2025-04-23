@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
    <h2>Tambah Produk Baru</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nama Produk</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="price">Harga</label>
            <input type="number" id="price" name="price" required>
        </div>

        <div>
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" required></textarea>
        </div>

        <button type="submit">Simpan Produk</button>
    </form>
@endsection

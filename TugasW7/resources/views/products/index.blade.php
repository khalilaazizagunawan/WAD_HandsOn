@extends('layouts.app')

@section('title', 'Product List')

@section('content')
    <h2>Daftar Produk</h2>

    <!-- Tombol Tambah Produk -->
    <a href="{{ route('products.create') }}" style="display:inline-block; margin-bottom: 15px; padding: 8px 12px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">
        + Tambah Produk
    </a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

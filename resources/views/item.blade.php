<!-- resources/views/item.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    h1, h2 {
        color: #004085;
    }

    form {
        background-color: #f0f8ff;
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    input, textarea, select, button {
        display: block;
        margin-bottom: 15px;
        padding: 10px;
        width: 100%;
        max-width: 400px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button {
        background-color: #004085;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    button:hover {
        background-color: #0069d9;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
    }

    li {
        background-color: #ffffff;
        padding: 10px;
        margin-bottom: 8px;
        border-left: 4px solid #0069d9;
        border-radius: 5px;
    }
</style>

<h1>Manajemen Barang</h1>

<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Barang" required>
    <textarea name="description" placeholder="Deskripsi"></textarea>
    <input type="number" name="price" placeholder="Harga" required>
    <input type="number" name="quantity" placeholder="Kuantitas" required>
    
    <select name="category_id" required>
        <option value="">Pilih Kategori</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <select name="supplier_id" required>
        <option value="">Pilih Supplier</option>
        @foreach($suppliers as $supplier)
            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
        @endforeach
    </select>

    <button type="submit">Tambah Barang</button>
</form>

<h2>Daftar Barang</h2>
<ul>
    @foreach($items as $item)
        <li>{{ $item->name }} - Rp {{ number_format($item->price, 2, ',', '.') }} - Stok: {{ $item->quantity }}</li>
    @endforeach
</ul>
@endsection

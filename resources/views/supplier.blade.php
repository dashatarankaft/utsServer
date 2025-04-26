<!-- resources/views/supplier.blade.php -->

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

    input, button {
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
        border-left: 4px solid #28a745;
        border-radius: 5px;
    }
</style>

<h1>Manajemen Supplier</h1>

<form action="{{ route('suppliers.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Supplier" required>
    <input type="text" name="contact_info" placeholder="Kontak Info" required>
    <button type="submit">Tambah Supplier</button>
</form>

<h2>Daftar Supplier</h2>
<ul>
    @foreach($suppliers as $supplier)
        <li>{{ $supplier->name }} - {{ $supplier->contact_info }}</li>
    @endforeach
</ul>
@endsection

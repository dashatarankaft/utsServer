<!-- resources/views/category.blade.php -->

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

    input, textarea, button {
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
        border-left: 4px solid #004085;
        border-radius: 5px;
    }
</style>

<h1>Manajemen Kategori</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Kategori" required>
    <textarea name="description" placeholder="Deskripsi"></textarea>
    <button type="submit">Tambah Kategori</button>
</form>

<h2>Daftar Kategori</h2>
<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }} - {{ $category->description }}</li>
    @endforeach
</ul>
@endsection

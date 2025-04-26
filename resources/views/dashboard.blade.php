<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>

    <h2>Laporan Berdasarkan Kategori</h2>
    @foreach($categories as $category)
        <h3>{{ $category->name }}</h3>
        <ul>
            <li>Jumlah Barang: {{ $category->items_count }}</li>
            <li>Total Nilai Stok: Rp {{ number_format($category->total_stock_value, 2, ',', '.') }}</li>
            <li>Rata-rata Harga: Rp {{ number_format($category->average_price, 2, ',', '.') }}</li>
        </ul>
    @endforeach

    <h2>Laporan Berdasarkan Pemasok</h2>
    @foreach($suppliers as $supplier)
        <h3>{{ $supplier->name }}</h3>
        <ul>
            <li>Jumlah Barang: {{ $supplier->items_count }}</li>
            <li>Total Nilai Barang: Rp {{ number_format($supplier->total_stock_value, 2, ',', '.') }}</li>
        </ul>
    @endforeach

    <h2>Ringkasan Sistem</h2>
    <ul>
        <li>Total Jumlah Barang: {{ $total_items }}</li>
        <li>Total Nilai Stok Keseluruhan: Rp {{ number_format($total_stock_value, 2, ',', '.') }}</li>
        <li>Jumlah Kategori: {{ $total_categories }}</li>
        <li>Jumlah Pemasok: {{ $total_suppliers }}</li>
    </ul>
@endsection

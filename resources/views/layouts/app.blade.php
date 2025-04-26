<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- kamu bisa taruh link CSS di sini -->
</head>
<body>
    <nav>
        <!-- Ini biasanya menu navigasi -->
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('categories.index') }}">Kategori</a> |
        <a href="{{ route('items.index') }}">Barang</a> |
        <a href="{{ route('suppliers.index') }}">Supplier</a>
    </nav>

    <main>
        @yield('content') <!-- Ini tempat konten halaman yang extend ke sini -->
    </main>

    <footer>
        <p>© 2025 Inventory System</p>
    </footer>
</body>
</html>

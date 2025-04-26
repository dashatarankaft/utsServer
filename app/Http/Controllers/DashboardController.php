<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Supplier;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('items')
            ->withSum('items as total_stock_value', 'price')
            ->withAvg('items as average_price', 'price')
            ->get();

        $suppliers = Supplier::withCount('items')
            ->withSum('items as total_stock_value', 'price')
            ->get();

        $total_items = Item::count();
        $total_stock_value = Item::sum('price');
        $total_categories = Category::count();
        $total_suppliers = Supplier::count();

        return view('dashboard', compact(
            'categories', 'suppliers', 'total_items', 'total_stock_value', 'total_categories', 'total_suppliers'
        ));
    }
}

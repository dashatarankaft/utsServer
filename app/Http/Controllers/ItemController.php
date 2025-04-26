<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('item', compact('items', 'categories', 'suppliers'));
    }

   
    public function store(Request $request)
    {
        // Add the authenticated user's ID to the request data
        $data = $request->all();
        $data['created_by'] = 1; // Assuming you are using Laravel's default authentication system
    
        // Create the item with the added created_by field
        Item::create($data);
    
        return redirect()->route('items.index');
    }
}

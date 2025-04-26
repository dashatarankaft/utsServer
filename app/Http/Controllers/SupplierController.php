<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier', compact('suppliers'));
    }

    public function store(Request $request)
    {
        // Add the authenticated user's ID to the request data
        $data = $request->all();
        $data['created_by'] = 2; // Assuming you are using Laravel's default authentication system
    
        // Create the supplier with the added created_by field
        Supplier::create($data);
    
        return redirect()->route('suppliers.index');
    }
}

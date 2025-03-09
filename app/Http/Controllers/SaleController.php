<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        $query = Sale::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->whereHas('product', function ($query) use ($search) {
                $query->where('product_name', 'like', "%{$search}%");
            });
        }

        $sales = $query->orderBy('created_at', 'desc')->get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('sales.create', compact('products', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'quantity' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0'
        ]);

        $product = Product::find($request->product_id);
        $price = $product->price;
        $subtotal = $price * $request->quantity;
        $discountAmount = ($request->discount / 100) * $subtotal;
        $total = $subtotal - $discountAmount;

        $sale = Sale::create([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'quantity' => $request->quantity,
            'price' => $price,
            'discount' => $request->discount,
            'total' => $total,
        ]);

        return redirect()->route('sales.index');
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $products = Product::all();
        $customers = Customer::all();

        return view('sales.edit', compact("sale",'products', 'customers'));
    }

    public function update(Request $request, Sale $sale)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'quantity' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0'
        ]);

        $product = Product::find($request->product_id);
        $price = $product->price;
        $subtotal = $price * $request->quantity;
        $discountAmount = ($request->discount / 100) * $subtotal;
        $total = $subtotal - $discountAmount;


        $sale->update([
            'product_id' => $request->product_id,
            'customer_id' => $request->customer_id,
            'quantity' => $request->quantity,
            'price' => $price,
            'discount' => $request->discount,
            'total' => $total,
        ]);
        return redirect()->route('sales.index');
     }

     public function destroy(Sale $sale)
     {
         $sale->delete();
         return redirect()->route('sales.index');
     }
}

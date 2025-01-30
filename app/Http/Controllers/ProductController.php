<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(5);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('products.create', compact("suppliers"));
    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(Request $request)
//    {
//        $validated = $request->validate([
//            'category_id' => 'required|exists:categories,id',
//            'product_name' => 'required|string|max:250',
//            'description' => 'required|string',
//            'qty_stock' => 'required|integer|min:0',
//            'price' => 'required|numeric|min:0',
//            'suppliers_ids' => 'required|array',
//            'suppliers_ids.*' => 'exists:suppliers,id'
//
//        ]);
//
//        $product = Product::create($validated);
//        $product->suppliers()->sync($validated['suppliers_ids']);
//
//       return redirect()->route('products.index')->with('success', 'Product created');
//
//
//
//    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_name' => 'required|string|max:250',
            'description' => 'required|string',
            'qty_stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'suppliers_ids' => 'required|array',
            'suppliers_ids.*' => 'exists:suppliers,id'
        ]);

        // Remove suppliers_ids from the validated data
        $productData = $validated;
        unset($productData['suppliers_ids']);

        // Create the product
        $product = Product::create($productData);

        // Attach suppliers to the product
        $product->suppliers()->sync($validated['suppliers_ids']);

        return redirect()->route('products.index')->with('success', 'Product created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        $productSuppliers = $product->suppliers->pluck('id')->toArray();
        return view('products.edit', compact('product', 'categories','suppliers', 'productSuppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'product_name' => 'required|string|max:250',
            'description' => 'required|string',
            'qty_stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'suppliers_ids' => 'required|array',
            'suppliers_ids.*' => 'exists:suppliers,id'
        ]);

        // Remove suppliers_ids from the validated data
        $productData = $validated;
        unset($productData['suppliers_ids']);

        // Update the product
        $product->update($productData);

        // Sync suppliers to the product
        $product->suppliers()->sync($validated['suppliers_ids']);

        return redirect()->route('products.index')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted success');
    }
}

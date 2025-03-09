<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $customerCount = Customer::count();
        $saleCount = Sale::count();

        return view('dashboard.index', compact('productCount', 'customerCount', 'saleCount'));
    }
}

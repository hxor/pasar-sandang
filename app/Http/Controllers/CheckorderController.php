<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckorderController extends Controller
{
    public function index()
    {
        return view('pages.front.check.index');
    }

    public function store(Request $request)
    {
        $order = Order::where('invoice', $request->invoice)->first();
        return view('pages.front.check.show', compact('order'));
    }

    public function show($id)
    {
        return view('pages.front.check.detail');
    }
}

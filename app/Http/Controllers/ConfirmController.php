<?php

namespace App\Http\Controllers;

use App\Models\OrderConfirm;
use App\Models\Order;
use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    /**
     * Upload file function
     * @param  File $photo File Input
     * @param  String $title given title from input
     * @return String        New File Name uploaded
     */
    protected function savePhoto($photo, $title)
    {
        $fileName = 'confirm-'. $title . '-'. uniqid() . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'confirm';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }

    public function index()
    {
        return view('pages.front.confirm.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'invoice' => 'required', 
            'bank' => 'required',
            'amount' => 'required',
            'name' => 'required',
            'file' => 'required'
        ]);

        $data = $request->only('invoice', 'bank', 'amount', 'name', 'note');
        $order = Order::where('invoice', $data['invoice'])->first();

        if ($order) {
            if (OrderConfirm::where('order_id', $order->id)->first()) {
                return redirect()->back();
            }
            if ($request->hasFile('file')) {
                $data['file'] = $this->savePhoto($request->file('file'), $data['name']);
                $data['order_id'] = $order->id;
                $confirm = OrderConfirm::create($data);
                return redirect('/');
            }
            return redirect()->back();
        }

        return redirect()->back();

    }

}
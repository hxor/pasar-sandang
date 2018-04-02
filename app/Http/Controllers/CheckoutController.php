<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Order;
use Illuminate\Http\Request;
use Steevenz\Rajaongkir;
use Cart;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('pages.front.checkout.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'phone' => 'required|min:11',
            'address' => 'required|min:10',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'postcode' => 'required'
        ]);

        $weight = 0;

        foreach (Cart::content() as $item) {
            $weight += $item->options->weight * $item->qty;
        }

        // return $weight;

        // inisiasi dengan config array
        $config['api_key'] = env('RAJAONGKIR_APIKEY');
        $config['account_type'] = env('RAJAONGKIR_TYPE');
        $rajaongkir = new Rajaongkir($config);

        $cost = $rajaongkir->getCost(
            [
                'city' => env('RAJAONGKIR_REGENCY_ORIGIN'),
                'originType' => 'city'
            ], 
            [
                'subdistrict' => $request->get('district_id'),
                'destinationType' => 'subdistrict'
            ], 
            $weight, 
            env('RAJAONGKIR_COURIER')
        );

        // return $cost['costs'][0]['cost'][0]['value'];
        // return $cost;

        session([
            'checkout.address.name' => $request->get('name'),
            'checkout.address.phone' => $request->get('phone'),
            'checkout.address.detail' => $request->get('address'),
            'checkout.address.province_id' => $request->get('province_id'),
            'checkout.address.regency_id' => $request->get('regency_id'),
            'checkout.address.district_id' => $request->get('district_id'),
            'checkout.address.postcode' => $request->get('postcode'),
            'chekcout.address.fee' => $cost['costs'][0]['cost'][0]['value']
        ]);

        return view('pages.front.checkout.confirm');

    }

    public function order(Request $request)
    {
        $data = [
            'invoice' => date('ymdHis') + rand(1,999),
            'name' => session()->get('checkout.address.name'),
            'phone' => session()->get('checkout.address.phone'),
            'address' => session()->get('checkout.address.detail')
            . ', ' . District::where('id',session()->get('checkout.address.district_id'))->first()->name
            . ', ' . Regency::where('id',session()->get('checkout.address.regency_id'))->first()->name
            . ', ' . Province::where('id',session()->get('checkout.address.province_id'))->first()->name
            . ', ' . session()->get('checkout.address.postcode'),
            'shippfee' => number_format(session()->get('chekcout.address.fee'),2,".",""),
            'total' => number_format((int)str_replace('.', '', Cart::total()),2,".",""),
            'grandtotal' => number_format((int)str_replace('.', '', Cart::total()) + session()->get('chekcout.address.fee'),2,".",""),
            'status' => 'order'
        ];

        $order = Order::create($data);
        $detail = [];
        foreach (Cart::content() as $item) {
            $detail[] = [
                'order_id' => $order->id,
                'product_id' => $item->id,
                'qty' => $item->qty,
                'price' => $item->price,
                'grandtotal' => $item->subtotal
            ];
        }
        $orderDetail = DB::table('order_details')->insert($detail);

        Cart::destroy();
        session()->forget('checkout.address.name');
        session()->forget('checkout.address.phone');
        session()->forget('checkout.address.detail');
        session()->forget('checkout.address.province_id');
        session()->forget('checkout.address.regency_id');
        session()->forget('checkout.address.district_id');
        session()->forget('checkout.address.postcode');
        session()->forget('checkout.address.fee');

        return view('pages.front.checkout.success', compact('order', 'orderDetail'));
    }

    public function getCities(Request $request)
    {
        if ($request->ajax()) {
            $cities = Regency::where('province_id', $request->get('province_id'))->pluck('name', 'id')->all();
            $data = view('pages.front.checkout._select', compact('cities'))->render();
            return response()->json(['options' => $data]);
        }
    }

    public function getDistrict(Request $request)
    {
        if ($request->ajax()) {
            $subdistricts = District::where('regency_id', $request->get('regency_id'))->pluck('name', 'id')->all();
            $data = view('pages.front.checkout._select', compact('subdistricts'))->render();
            return response()->json(['options' => $data]);
        }
    }
}

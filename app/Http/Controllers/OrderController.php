<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Tiket;

class OrderController extends Controller
{
    public function index()
    {
        $Order=Order::where('status','0')->get();
        // return $Order;
        // die;
        return view('Order',compact('Order'));
    }

    public function store(Request $request)
    {
        // return $request->all();

        $validatedData = $request->validate([
            'id_tiket'=> 'required',
            'qty'=>'required',
            'date'=>'required'
        ]);

        Order::create($validatedData);
        return redirect('/Order');
    }

    public function destroy($id)
    {
        $order=Order::findOrFail($id);
        if(!$order){
            return redirect()->back();
        }
        $order->delete();
        return redirect('/Order');
    }

    public function update()
    {
        $order=Order::where('status','0');
        $order->update(['status'=>'1']);
        return redirect()->back();
    }

}

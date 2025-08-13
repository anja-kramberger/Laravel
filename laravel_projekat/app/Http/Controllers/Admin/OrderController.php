<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class OrderController extends Controller
{
    public function index(Request $request){
        //$orders = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(2);
        //$todayDate = Carbon::now();//'2023-05-27';;
        //$orders = Order::whereDate('created_at', $todayDate)->paginate(10);

        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date != null, function($q) use ($request){

                return $q->whereDate('created_at', $request->date);
            }, function($q) use ($todayDate){

                $q->whereDate('created_at', $todayDate);
            })
            /*->when($request->status != null, function($q) use ($request){

                return $q->where('status_message', $request->status);
            })*/
            ->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }
    public function show(int $orderId){
        $order = Order::where('id', $orderId)->first();
        if($order){
            return view('admin.orders.view', compact('order'));
        }
        else{
            return redirect('admin/orders')->with('message', 'Order Id not Found');
        }
        
    }
    
}

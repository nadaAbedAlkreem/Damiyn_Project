<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use App\Services\OrdersDatatableService ;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , OrdersDatatableService $ordersDatatableService)
    {
        $id =  Auth::user()->id  ; 
        $orders = Order::with('users')
        ->where('orders.user_id', $id)
        ->get();
         $total_number_order = $orders->count();
         $total_number_of_progress_order = $orders->where('status_order', 'Progress')->count();
         $total_number_of_wait_order = $orders->where('status_order', 'Wait')->count();
         $total_number_of_complete_order = $orders->where('status_order', 'Complete')->count();

        if ($request->ajax()) 
        {
            $data = Order::with('users')->select('*')->where('orders.user_id' , $id);
             
            try {
                return $ordersDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }

        return view('orders'   , 
        [
            'total_number_order' => $total_number_order  ,
            'total_number_of_progress_order' =>$total_number_of_progress_order  , 
            'total_number_of_wait_order' =>$total_number_of_wait_order  , 
            'total_number_of_complete_order' =>$total_number_of_complete_order  , 
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $order =  Order::create($request->getData());
 
        return $order ? parent::successResponse() :  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

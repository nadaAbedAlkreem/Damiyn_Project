<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OrdersDashboardDatatableService ;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Yajra\DataTables\Facades\DataTables;



class OrderController extends Controller
{
    public function index(Request $request , OrdersDashboardDatatableService $ordersDashboardDatatableService)
    {
 
        if ($request->ajax()) 
        {
            $data = Order::with('users')->select('*');
            try {
                return $ordersDashboardDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
        return view('dashboard.orders.view');

    }
}

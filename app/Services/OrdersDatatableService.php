<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\Facades\DataTables;



class OrdersDatatableService extends Controller
{
    public function handle( $request,$data)
    {

            return Datatables::of($data)
                    ->addIndexColumn()
                    
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('type_order'))  ) {
                            $instance->where('type_request', $request->get('type_request'));
                        }
                       if (!empty($request->get('search')) ) { 
                          $search =$request->get('search');
                         $instance->where('code','like' , "%$search%");
                     }
                       })
     
                    ->addColumn('created_at', function ($data) {  
                        return  date('d M Y', strtotime($data->created_at)); 
                   
                    })
    
                    ->addColumn('status_order', function ($data) { 
    
                        if($data->status_order == "Wait"){
                            return'<td><button class="btn btn-payment">بإنتظار الدفع</button></td>'; 
    
                        }elseif($data->status_order == "Complete"){
                            return'<td class="text-center"><button class="btn btn-finish">مكتمل </button></td>' ; 
    
                        }else{
                         return '<td><button class="btn btn-waiting">قيد التنفيد</button></td>' ;
    
                        }
                            })
                    ->addColumn('type_order', function ($data) { 
                        if($data->type_request == 'p'){
                            return   '<td>منتج</td> '; 
    
                        }else{
                            return   '<td>خدمة</td> '; 
    
                        }
                          })
                     ->addColumn('description', function ($data) { 
                        
                                return 
                               '<td> <a data-bs-toggle="modal" data-bs-target="#exampleModal3" 
                               data-bs-whatever="@mdo" 
                               data-des="'.$data->description.'"     
                               data-code="'.$data->code.'"
                               id="show_des" 
                               class="show"   
                               >مشاهدة التفاصيل</a> </td>'; 
                              })
                              
                    ->addColumn('mobile_phone_vendor', function ($data) { 
                                return 
                                '<td>+966 '.$data->mobile_phone_vendor.'</td>'
     
                                ; 
                               })
                               
                    ->rawColumns([ 'status_order'  ,'type_order'  , 'description' , 'mobile_phone_vendor'])
                    ->make(true);
     

    }
 
 
}
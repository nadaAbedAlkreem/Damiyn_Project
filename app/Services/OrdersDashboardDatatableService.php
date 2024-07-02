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



class OrdersDashboardDatatableService extends Controller
{
    public function handle( $request,$data)
    {

        return Datatables::of($data)
        ->addIndexColumn()
            
        ->filter(function ($instance) use ($request) {

              if (!empty($request->get('type_order')) &&  $request->get('type_order') != -1 )  {
                 $instance->where('type_order', $request->get('type_order'));
              }
              if (!empty($request->get('status')) &&  $request->get('status') != -1 )  {
                $instance->where('status_order', $request->get('status'));
              }
                if (!empty($request->get('search')))
               {
                 $search = $request->get('search');
                 $instance->whereHas('users', function ($query) use ($search) 
                 {
                       $query->where('name', 'like', "%$search%");
                 });
                 $instance->orWhere('code','like', "%$search%");

               }

         
           })
        ->addColumn('create', function ($data)
        {  
            return  date('d M Y', strtotime($data->created_at)); 
    
        })
      
        ->addColumn('status', function ($data) 
        { 

            if($data->status_order == "Wait"){
                return'<td><button class="btn btn-payment">   wait</button></td>'; 

            }elseif($data->status_order == "Complete"){
                return'<td class="text-center"><button class="btn btn-finish"> complete </button></td>' ; 

            }else{
            return '<td><button class="btn btn-waiting"> progress  </button></td>' ;

            }
        })
    ->addColumn('type', function ($data)
        { 

        return$data->type_request; 
    
        })
        ->addColumn('user', function ($data)
        { 
                return  $data->users->name ; 
        
        })
        ->addColumn('description', function ($data) { 
            
                    return 
                '<td> <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3" 
                data-bs-whatever="@mdo" 
                data-des="'.$data->description.'"     
                data-code="'.$data->code.'"
                id="show_des" 
                class="show"   
                >مشاهدة التفاصيل</a> </td>'; 
                })
                
        ->addColumn('mobile', function ($data) { 
                    return 
                    '<td>+966 '.$data->mobile_phone_vendor.'</td>'

                    ; 
                })
                
        ->rawColumns(['description' , 'mobile'  ,'type'  , 'status'  ])
        ->make(true);
     

    }
 
 
}
<?php

namespace App\Services;

use App\Helpers\Messages;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllersService;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;
use Yajra\DataTables\Facades\DataTables;



class RatingDashboardDatatableService extends Controller
{
    public function handle( $request,$data)
    {
            
        return Datatables::of($data)
        ->addIndexColumn()
        ->filter(function ($instance) use ($request) {
        //    if (!empty($request->get('search')) ) { 
        //       $search =$request->get('search');
        //      $instance->where('code','like' , "%$search%");
        //  }
           })
    
        ->addColumn('name', function ($data) { 
         return    $data->users->name ; 
    
         })    
    
        ->addColumn('create', function ($data) {  
            return  date('d M Y', strtotime($data->created_at)); 
       
        })    
        ->rawColumns(['name' , 'create'  ])
           
         ->make(true);

    }
 
 
}
<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::select('*')->get();
         return view('Dashboard.setting.view' , ['setting' => $setting]) ; 
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
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        foreach ($request->except(['avatar_remove' ,'_token' ]) as $key => $value)
        {
            
             
             if (strpos($key , "logo")!== false  || strpos($key , "image")!== false) 
            {
                $file=   $request->file($key) ;
 
                $path = 'uploads/images/setting/';
                $nameImage = time()+rand(1,10000000).'.'.$file->getClientOriginalExtension();
               Storage::disk('public')->put($path.$nameImage, file_get_contents($file ));
                $data = Setting::where('key', $key)->first();
                $data->value =  $path.$nameImage ;
                $data->update();

            }
            else if(strpos($key , "video") !== false)
            {
                $file=   $request->file($key) ; 

                 $path = 'uploads/videos/setting/';
                $nameImage = time()+rand(1,10000000).'.'.$request->file($file)->getClientOriginalExtension();
                Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file($file) ));
                $data = Setting::where('key', $key)->first();
                $data->value =  $path.$nameImage ;
                $data->update();
            }      
                  
            
            else
            {
                $data = Setting::where('key',  $key)->first();
                $data->value = $value;
                $data->update();

            }
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

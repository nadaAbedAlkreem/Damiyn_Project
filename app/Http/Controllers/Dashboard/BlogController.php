<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Services\BlogsDashboardDatatableService ;
use Illuminate\Support\Facades\Auth;
 use Yajra\DataTables\Facades\DataTables;



class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , BlogsDashboardDatatableService $blogsDashboardDatatableService)
    {
 
        if ($request->ajax()) 
        {
            $data = Blog::select('*');
            try {
                return $blogsDashboardDatatableService->handle($request,$data);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }
        return view('dashboard.blogs.view');

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
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        $blog = Blog::create($request->getData());
 
 
        return $blog ? parent::successResponse() :  parent::errorResponse(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    { 


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request)
    {
        $create_blog= Blog::where('id' ,$request['id'] )->update($request->getData());
        return $create_blog? parent::successResponse():  parent::errorResponse(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_blog=  Blog::find($id)->delete($id);
        return $delete_blog? parent::successResponse():  parent::errorResponse(); 

    }

    public function showIndex()
    {
 
     $bloges = Blog::get() ; 
     return view ('bloges'  , ['bloges'  => $bloges]) ; 
   
    }
 
}

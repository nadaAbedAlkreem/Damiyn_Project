<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth ; 
class HomeController extends Controller
{
    public function index()
    {
         
        return view('dashboard.home');
    }
}

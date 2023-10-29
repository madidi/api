<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public  function index(Request $request)
    {
        if ($request['role']=='admin'){
            dd('slm admin' , );
        }else{
            dd('salam user:)');
        }
    }
}

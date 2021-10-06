<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusinessController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.business.index',$data);
    }

}

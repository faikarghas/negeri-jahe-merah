<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.visit.index',$data);
    }

}

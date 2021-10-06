<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.profile.index',$data);
    }

}

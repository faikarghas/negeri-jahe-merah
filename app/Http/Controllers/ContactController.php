<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.contact.index',$data);
    }

    public function term(){

        $data = [
        ];

        return view('web.term.index',$data);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.home.index',$data);
    }

    public function latest(){

        $data = [
        ];

        return view('web.news.latest-news',$data);
    }

    public function events(){

        $data = [
        ];

        return view('web.news.events',$data);
    }

    public function literatures(){
        $data = [
        ];

        return view('web.news.literatures',$data);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){

        $data = [
        ];

        return view('web.product.index',$data);
    }

    public function detail($slug){
        $product = DB::table('products')->where('slug',$slug)->get();

        $data = [
            'product' => $product
        ];

        return view('web.product.detail',$data);
    }

}

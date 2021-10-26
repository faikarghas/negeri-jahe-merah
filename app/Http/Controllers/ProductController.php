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
        $otherProduct = DB::table('products')->where('slug','<>',$slug)->get();

        $data = [
            'product' => $product,
            'otherProduct' => $otherProduct
        ];

        return view('web.product.detail',$data);
    }

}

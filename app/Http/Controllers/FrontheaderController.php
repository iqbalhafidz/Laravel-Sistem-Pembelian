<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Keunggulan;
use App\Models\Informasi;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    public function index(){

        $data =array(
            
            'info'=>Informasi::all()
        );

        // $data = Product::paginate(6);
        // //$data = Product::all();
        // return view('front.home',compact('data'));

        
        return view('layouts.front',compact('data'));

    }

    public function info(){
        // $data =array(
        //     'info'=>Informasi::all(),
        //     'unggulan'=>Keunggulan::all()
        // );

        
        // return view('front.front',compact('data'));
    }


    public function keunggulan(){

        // $dd = Keunggulan::all();

        // // $dd(db);
        // return view('front.home',compact('dd'));
    }

    //  public function product(){
    //     // return view('front.about');

    //     $data = Product::all();
    //     return view("admin.product.productindex",compact('data'));
    // }
}

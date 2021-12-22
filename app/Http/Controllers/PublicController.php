<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;


use App\Models\User;
use App\Models\Product;


class PublicController extends Controller
{
    public function home()
    {
        $products = Product::where('deleted','=',0)->get();
        return view('home' , ['data'=>$products]);
    }

    public function preset()
    {
        $products = Product::where('deleted','=',0)->paginate(6);
        #mengetest apakah data berhasil di get (lihat isinya --> attribute)
        // dd($products);
        return view('preset', ['data'=>$products]);
    }

    public function search(Request $request){
        // $request = $_GET['search'];
        $searchProduct = Product::where('name','like','%'.$request->search.'%')->where('deleted','=',0)->paginate(6);
        // $searchProduct = Product::search($request->search)->paginate(6);
        if($searchProduct !=NULL){
            return view('preset', ['data'=>$searchProduct]);
            // return view('preset', searchProduct('preset'));
        } 
        else{
            home();
        }
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function tutorial()
    {
        return view('tutorial');
    }

    public function account()
    {
        return view('account');
    }

    public function view(Product $product)
    {
        return view('view', ['product'=>$product]);
    }
    
}

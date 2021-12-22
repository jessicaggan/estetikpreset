<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;


use App\Models\User;
use App\Models\Product;
use App\Models\Chat;


class AdminController extends Controller
{
    // public function index(){
    //     $products = Product::where('deleted','=',0)->get();
    //     // select('select * from product where deleted = 0')
    //     return view('/admin/manage', ['data'=>$products]);
    // }

    public function destroy($id){
        $product= Product::find($id);
        // dd($product["deleted"]);
        $product["deleted"] = 1;
        $product->save();
        return redirect('/manage')->with('status','Data Deleted Successfully!');
    }

    public function manage()
    {
        $products = Product::where('deleted','=',0)->get();
        return view('/admin/manage', ['data'=>$products]);
    }

    public function update()
    {
        $products = Product::get();
        return view('/admin/update', ['data'=>$products]);
    }

    public function insert()
    {
        return view('/admin/insert');
    }

    public function post_insert(Request $request)
    {
        $request->validate([
            'product_name'=>'required|min:3',
            'price'=>'required|numeric|min:10000',
            'description'=>'required|min:3',
            'image'=>'required|mimes:jpg,png,jpeg'
        ]);
        
        //IMAGE NAME
        $newImageName = time().'-'.$request->file('image')->getClientOriginalName();
        
        //SAVE IMAGE TO /public/product
        $request->file('image')->move(public_path('/image/preset'),$newImageName);
        
        $product = new Product;
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->path = $newImageName;
        
        $product->save();
        return redirect('/manage')->with('message','Added new product!');;
    }


    public function post_update(Request $request)
    {
        $request->validate([
            'product_name'=>'required|min:3',
            'price'=>'required|numeric|min:10000',
            'description'=>'required|min:3',
            'image'=>'required|mimes:jpg,png,jpeg'
        ]);
        
        
        //IMAGE NAME
        $newImageName = time().'-'.$request->file('image')->getClientOriginalName();
        
        //SAVE IMAGE TO /public/product
        $request->file('image')->move(public_path('/image/preset'),$newImageName);
        
        $product= Product::where('id',$request->id)
        ->update([
            'name' => $request->product_name,
            'description' => $request->description,
            'price' => $request->price,
            'path' => $newImageName
        ]);

        $product->save();
        return redirect('/admin/update')->with('message','Product updated!');;
    }

}

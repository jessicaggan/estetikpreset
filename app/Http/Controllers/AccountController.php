<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;


use App\Models\User;
use App\Models\Cart;
use App\Models\Chat;
use App\Models\Product;


class AccountController extends Controller
{
    public function register(Request $request)
    {
        //Set session as 'register'
        $request->session()->put('last_auth_attempt', 'register');

        $validated = $request->validate([
            'username'=>'required|min:3',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|same:retype_password',
            'retype_password'=>'required|min:5|same:password'
        ]);
        $credentials = ['email'=>$validated['email'],'password'=>$validated['password']];
        $validated['password'] = Hash::make($validated['password']);
        $validated['role'] = 1;
        $user = User::create($validated);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $userPublicInfo = ["role" => $user["role"], "username" => $user["username"] , "id" => $user["id"]];
            $request->session()->put('LoggedUser', $userPublicInfo);
        }
        
        return redirect('account');
    }

    public function login(Request $request)
    {
        //Set session as 'login'
        $request->session()->put('last_auth_attempt', 'login');

        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            // Take user data
            $userInfo = User::where('email','=',$request->email)->first();
            // Take only public data
            $userPublicInfo = ["role" => $userInfo["role"], "username" => $userInfo["username"] , "id" => $userInfo["id"]];
            // Put user public info in session
            $request->session()->put('LoggedUser', $userPublicInfo);
            return redirect()->intended('/');
        }

        return back()->with('loginFail','The provided credentials do not match!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function cart()
    {
        // ambil data cart dari user tersebut
        $userCart = DB::table('carts')
                    ->where('userid',"=",session('LoggedUser')["id"])
                    ->join('products','carts.productid','=','products.id')
                    ->select('carts.*','products.*')
                    ->get();

        return view('cart',['userCart'=>$userCart]);
    }

    public function addtocart($id)
    {
        // dd($id); 
        // $id -> ini adalah product id

        // Ambil info product dari DB
        $productInfo = Product::where('id','=',$id)->first();

        // untuk cek udah ada di cart blm
        $check = Cart::where('userid' , '=' ,session("LoggedUser")["id"])
                        ->where('productid','=',$id)->first();

        if($productInfo && $productInfo["deleted"]==0 && empty($check)){
            // add to cart kalo product ketemu dan tidak di delete productnya dan blm ada di cart.
            $cart = new Cart;
            $cart->userid = session("LoggedUser")["id"];
            $cart->productid = $id;
            $cart->save();
            // return redirect('preset');
        }

        return Redirect::back();
    }
}

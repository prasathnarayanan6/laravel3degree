<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or Password is Not Matching";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/products');
        }
    }
    function cart(Request $req)
    {
        if(session()->has('id'))
        {
            $item=new Cart();
            $item->quantity=$data->input('quantity');
            $item->productId=$data->input('id');
            $item->customerId=session()->get('id');
            $item->save();
            return redirect()->back()->with('success','Item added');
        } 
        else
        {
            return redirect('login')->with('success', 'Congrats!');
        }
    }
}

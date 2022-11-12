<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


class clientController extends Controller
{  
    function homeBodyCategoriesViewFunction(){
        $category = new CategoryController();
        return view('client.dashboard')->with(['categories'=> $category->getCategory()]);
    }
    function signInPageViewFunction(){
        return view('client.authentication.logIn');
    }
    function registerUserPageViewFunction(){
        return view('client.authentication.register');
    }
    function checkoutPageFunction(){
        return view('client.bag.index');
    }
    //Authenticate User
    function authenticateUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = User::find($request);
        if($user == 'null'){
            alert('<script>alert("Invalid or no User Registered")</script>');
        }else{

        }
    }
}
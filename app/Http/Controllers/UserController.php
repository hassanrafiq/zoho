<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

 public function index(){

 return view('user/index');


 }
     public  function home(){

  if(Auth::user()->usertype=='0'){

     return view('user/index');
  
     }else{
    
     return view ('admin.dashboard'); 
             
     }

     }

     public function logout()
     {
         Auth::logout();
         return redirect('/');
     }
}

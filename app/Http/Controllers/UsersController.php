<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {

    //load home page with datas
    public function index(){
        $all_users=User::all();
        return view('home',['users'=>$all_users]);
    }
    
}

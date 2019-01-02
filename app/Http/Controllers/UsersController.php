<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Response;
use Illuminate\Validation\Rule;

class UsersController extends Controller {

    //load home page with datas
    public function index(){
        $all_users=User::all();
        return view('home',['users'=>$all_users]);
    }

    // add new user into the database
    public function store(Request $request){
        $validators=Validator::make($request->all(),[
            'username'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'designation'=>'required'
        ]);
        if($validators->fails()){
            return Response::json(['errors'=>$validators->getMessageBag()->toArray()]);
        }else{
            $user=new User();
            $user->username=$request->username;
            $user->email=$request->email;
            $user->designation=$request->designation;
            $user->password=bcrypt('password');
            $user->save();
            return response()->json($user);
        }
    }

    // update user according to the id
    public function update(Request $request){
        $user=User::findOrFail($request->id);
        $user->update($request->all());
        return response()->json($user);
    }
    
}

<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postsingUp(Request $request){

        $this->validate($request,[
            'email' =>'required|email|unique:users',
            'name' =>'required',
            'password'=>'required|min:4'
        ]);
        $email = $request['email'];
        $name  = $request['name'];
        $password=bcrypt($request['password']);

        $user = new User();

        $user->name=$name;
        $user->email=$email;
        $user->password=$password;

        $user->save();
        // Auth::login($user);
        return redirect()->route('home');

    }
    public function singIn(Request $request){
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }

}

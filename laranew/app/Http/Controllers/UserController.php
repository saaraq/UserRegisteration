<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Validation\Validator;
use App\User;
use App\Users;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;




class UserController extends Controller
{
public function index(){

    $users=\App\Users::all();

return $users;
}
    public function register(){

return view('Users.register');

    }
    public function store(Request $request) {

        $this->validate($request, [
            'FirstName'=>'required',
                'LastName'=>'required',
                'userName'=>'required|unique:users,userName',
                'email'=>'required|email|unique:users,email',
                'password'=>'required',


        ]);

            // Register the new user
            $input=($request->all());
            Users::create($input);
        return redirect('/login')->with('status', 'User registered!');
        }






}

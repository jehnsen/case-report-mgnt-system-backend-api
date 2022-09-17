<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'password' => 'required',
            'usertype' => 'required',
            'division' => 'required'
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response([ 'user' => $user, 'access_token' => $accessToken ]);

    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($loginData)) {
            return response()->json(['message' => 'Invalid Credentails'], 401);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response([ 'user' => auth()->user(), 'access_token' => $accessToken ]);
    }

    public function get(){
        return User::get();
    }

    public function update(Request $request){
        return User::where('id', $request->id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'usertype' => $request->usertype
        ]);

    }

    public function updatePassword(Request $request){
        return User::where('id', $request->id)->update(['password' => bcrypt($request->password)]);
    }

    public function delete($id){
        return User::where('id',$id)->delete();
    }

}

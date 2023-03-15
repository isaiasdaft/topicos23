<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
//use Illuminate\Support\Facades\Valdiator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends ResponseController
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:25',
            'email' => 'requiered|email',
            'password' => 'required|min:8',
            'c_password' => 'required|min:8',

        ]);

      //  if($validator->fails()){
        //    return $this->sendError('Valdation Error.',
          //  $validator->errors());
       //}

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User register successfuly');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,
        'password' => $request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            $success['name'] = $user->name;
            return $this->sendResponse($success,
            'User login Succesfuly');
        }
        else{
            return $this->sendError('Unauthorised.',
            ['error' => 'Unauthorised']);
        }

    }
}

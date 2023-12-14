<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request){
        //This are the fields and conditions before user can proceed
        $RegisterData = $request->validate([
            'name'=>['required',Rule::unique('users','name')],
            'email'=>['required',Rule::unique('users','email')],
            'password'=>['required','min:8']
        ]);
        $RegisterData['password'] = bcrypt($RegisterData['password']);
        $user = User::create($RegisterData);
        auth()->login($user);
        return redirect('/');

        return 'Hello';
    }
}

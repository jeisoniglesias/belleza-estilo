<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function index(Request $request)
    {
        return view('auth.registerPage');
    }
    function register(RegisterUserFormRequest $request)
    {
        $request['password'] = Hash::make($request['password']);
        $user = User::create($request->all());
        // TODO: alert succesfull register
        return redirect()->route('home');
    }
}

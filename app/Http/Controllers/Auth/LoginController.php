<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserFormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(LoginUserFormRequest $request)
    {
        return 'para login';
    }
    function index(Request $request)
    {
        return view('auth.loginPage');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserFormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(LoginUserFormRequest $request)
    {

        $data = $this->createSesion($request);
        //$request->session()->flash('success', "Welcome, " . Auth::user()->name . "!");

        //return redirect()->intended('/');
        return redirect()->route('home');

        //return redirect()->to(url('/'));
    }

    // method request oauth/token
    function createSesion(LoginUserFormRequest $request)
    {
        $client_id_password = config('passport.password_grant_client.id');
        $client_secret_password = config('passport.password_grant_client.secret');
        $data = [
            "username" => $request->email,
            "password" => $request->password,
            'client_id' => $client_id_password,
            'client_secret' => $client_secret_password,
            'grant_type' => 'password',
        ];
        $request = Request::create('/oauth/token', 'POST', $data);
        $response = app()->handle($request);
        $data = json_decode($response->getContent());

        if (isset($data->error)) {
            throw ValidationException::withMessages([
                'email' => 'Las credenciales proporcionadas son incorrectas.',
            ]);
        }
        return $data;
    }


    function index(Request $request)
    {
        return view('auth.loginPage');
    }
}

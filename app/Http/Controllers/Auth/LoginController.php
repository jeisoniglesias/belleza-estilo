<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(LoginUserFormRequest $request)
    {
        $data = $this->createSesion($request);
        // create auth with passport
        $request->session()->put('token', $data->access_token);
        $request->session()->put('token_type', $data->token_type);
        $request->session()->put('expires_at', now()->addSeconds($data->expires_in));

        return response()->json($data);
        return 'para login';
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
                'email' => 'The provided credentials are incorrect.',
            ]);
        }
        return $data;
    }


    function index(Request $request)
    {
        return view('auth.loginPage');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nick' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$data->id,
            'password' => 'required|string|min:8|confirmed'
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'nick' => $data['nick'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 1,
        ]);
    }
}
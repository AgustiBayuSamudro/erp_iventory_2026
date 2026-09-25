<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function register(Request $request) {
        $validatedData = $request->validate([
            'name'       => 'required|string|max:255',
            'username'   => 'required|string|max:255|unique:users',
            'email'      => 'required|email|unique:users',
            'nomer_telp' => 'required|string|max:15',
            'gender'     => 'required',
            'password'   => 'required|min:6|confirmed',
        ]);

        $this->userService->register($validatedData);
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        $this->userService->login($credentials);
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    public function showLogin() {
        return view ('auth.login');
    }
    public function showRegister() {
        return view ('auth.register');
    }
}

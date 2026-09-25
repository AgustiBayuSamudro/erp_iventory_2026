<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserService {
    public function register(array $data) {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'nomer_telp' => $data['nomer_telp'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function login(array $credentials) {
        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Email atau password yang Anda masukkan salah.'],
            ]);
        }
        Auth::login($user);
        return $user;
    }
}
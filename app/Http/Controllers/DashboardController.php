<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function userAll() {
        $users = $this->userService->userAll();
        return view('dashboard.dashboard', compact('users'));
    }
}

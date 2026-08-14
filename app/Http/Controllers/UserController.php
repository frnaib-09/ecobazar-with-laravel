<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {
        return view('backend.user', [
            'users' => User::latest()->get(),
        ]);
    }
}

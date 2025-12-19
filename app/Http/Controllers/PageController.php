<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Example;
use Illuminate\Http\Request;
use App\Models\User;

class PageController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function registration()
    {
        return view('auth/registration');
    }

    public function createExamples()
    {
        $users = User::all();
        $examples = Example::all();

        return view('createExamples', compact('users', 'examples'));
    }
}

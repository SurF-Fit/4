<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email',
            'password' => 'required|min:4|max:15',
        ], [
            'name.required' => 'Введите Ваше имя для регистрации',
            'email.required' => 'Введите почту для регистрации',
            'email.email' => 'Нужно ввести Email',
            'password.required' => 'Введите пароль для регистрации',
            'password.min' => 'Минимальное количество символов 4',
            'password.max' => 'Максимальное количество символов 15',
        ]);

        $roleIsUser = Role::where('role', 'user')->first();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role_id' => $roleIsUser->id,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $dataUser = $request->validate([
           'email' => 'required|email',
           'password' => 'required|min:4|max:15'
        ], [
            'email.required' => 'Введите почту для авторизации',
            'email.email' => 'Нужно ввести Email',
            'password.required' => 'Введите пароль для авторизации',
            'password.min' => 'Минимальное количество символов 4',
            'password.max' => 'Максимальное количество символов 15',
        ]);

        if (Auth::attempt($dataUser)){
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

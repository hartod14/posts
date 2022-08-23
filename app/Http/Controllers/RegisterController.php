<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Database\Console\Migrations\RollbackCommand;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Throwable;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => "Register"
        ]);
    }

    public function store(StoreRegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Register has been completed! Please Login');
    }
}

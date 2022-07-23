<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Database\Console\Migrations\RollbackCommand;
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
        try {
            DB::beginTransaction();

            $validated = $request->validated();

            $validated['password'] = bcrypt($validated['password']);

            User::Create($validated);

            DB::commit();
        } catch (\Throwable $e) {

            DB::rollback();

            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect('/login')->with('success', 'Register has been completed! Please Login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class LoginController extends Controller
{
    public function showFormLogin()
    {
        return view('pages.login');
    }


    public function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('wallets.create');
        } else {
            return back();
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function showFormRegister()
    {

        return view('pages.register');
    }


    public function register(RegisterRequest $request)
    {

        DB::beginTransaction();
        try {
            $user = new User();
            $user->fill($request->all());
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            
            $user->save();
            return redirect()->route('login');
        } catch (Exception $exception) {
            DB::rollBack();
        }

        return redirect()->route('login');
    }


    public function showFormChangePassword()
    {
        return view('pages.change-password');
    }


    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        $currentPassword = $user->password;
        if (!Hash::check($request->currentPassword, $currentPassword)) {
            return redirect()->back()->withErrors(['currentPassword' => 'Sai Password hiện tại ']);
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();
        return redirect()->route('login');
    }
}

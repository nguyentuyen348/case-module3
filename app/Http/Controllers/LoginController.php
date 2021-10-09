<?php

namespace App\Http\Controllers;

use App\Models\User;
use Mockery\Exception;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ChangePasswordRequest;

class LoginController extends Controller
{
    function showFormLogin()
    {
        return view('pages.login');
    }



    function login(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('pages.showFormChangePassword');
        } else {
            return back();
        }
    }



    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    function showFormRegister(){
        return view('pages.register');
    }



    function register(RegisterRequest $request){

        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            DB::commit();
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

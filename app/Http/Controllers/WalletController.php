<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\Wallet_category;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $wallets=Wallet::all();
        return view('backend.users.wallets.list',compact('wallets'));
    }

    public function create()
    {
        $walletCategories=Wallet_category::all();
        return view('backend.users.wallets.create',compact('walletCategories'));
    }

    public function store(Request $request,Wallet $wallet)
    {
        $wallet->name=$request->name;
        $wallet->wallet_category_id=$request->wallet_category_id;
        $wallet->amount=$request->amount;
        $wallet->save();
        return redirect()->route('wallets.index');
    }

}

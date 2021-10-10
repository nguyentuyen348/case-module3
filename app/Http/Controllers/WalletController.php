<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Cost_category;
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

    public function show($id)
    {
        $costs=Cost::all();
        $wallet=Wallet::findOrFail($id);
        return view('backend.users.wallets.detail',compact('wallet','costs'));
    }

    public function edit($id)
    {
        $wallet=Wallet::findOrFail($id);
        return view('backend.users.wallets.update',compact('wallet'));
    }

    public function update(Request $request,$id)
    {
        $wallet=Wallet::findOrFail($id);
        $wallet->name=$request->name;
        if ($request->hasFile('icon')){
            $icon=$request->file('icon');
            $path=$icon->store('icons','public');
            $wallet->icon=$path;
        }
        $wallet->save();
        return redirect()->route('wallets.detail');
    }

    public function delete($id)
    {
        $wallet=Wallet::findOrFail($id);
        $wallet->delete();
        session('success', 'delete success');
        return redirect()->route('wallets.index');
    }

    public function createCost()
    {
        $costCategories=Cost_category::all();
        return view('backend.users.wallets.createCost',compact('costCategories'));
    }

    public function storeCost(Request $request,Cost $cost)
    {
        $cost->name=$request->name;
        $cost->cost_category_id=$request->cost_category_id;
        $cost->amount=$request->amount;
        $cost->note=$request->note;
        $cost->save();
        return redirect()->route('wallets.detail');
    }
}

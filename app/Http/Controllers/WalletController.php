<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Income;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Models\Cost_category;
use App\Models\Income_category;
use App\Models\Wallet_category;

class WalletController extends Controller
{
    public function index()
    {
        $wallet_categories=Wallet_category::all();
        $wallets=Wallet::all();
        return view('backend.users.wallets.list',compact('wallets','wallet_categories'));
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
        $wallet = Wallet::findOrFail($id);
        $costs = Cost::where('wallet_id', '=', $id)->get();
        $incomes = Income::where('wallet_id', '=', $id)->get();
        return view('backend.users.wallets.detail',compact('wallet','costs','incomes'));
    }

    public function listCosts($id)
    {
        $wallet = Wallet::findOrFail($id);
        $costs = Cost::where('wallet_id', '=', $id)->get();
        return view('backend.users.wallets.listCosts', compact('wallet', 'costs'));
    }

    public function edit($id)
    {
        $wallet = Wallet::findOrFail($id);
        return view('backend.users.wallets.update', compact('wallet'));
    }

    public function update(Request $request, $id)
    {
        $wallet = Wallet::findOrFail($id);
        $wallet->name = $request->name;
        $wallet->amount = $request->amount;
        if ($request->hasFile('icon')){
            $icon=$request->file('icon');
            $path=$icon->store('icons','public');
            $wallet->icon=$path;
        }
        $wallet->save();
        return redirect()->action([WalletController::class, 'show'], $wallet->id);
    }

    public function delete($id)
    {
        $wallet=Wallet::findOrFail($id);
        $wallet->delete();
        session('success', 'delete success');
        return redirect()->route('wallets.index');
    }

    public function createCost($id)
    {
        $wallet=Wallet::findOrFail($id);
        $costCategories=Cost_category::all();
        return view('backend.users.wallets.createCost',compact('costCategories','wallet'));
    }

    public function storeCost(Request $request, Cost $cost, $id)
    {
        $wallet = Wallet::findOrFail($id);
        $cost->wallet_id = $request->wallet_id;
        $cost->name = $request->name;
        $cost->cost_category_id = $request->cost_category_id;
        $cost->amount = $request->amount;
        $cost->note = $request->note;
        $cost->save();
        return redirect()->action([WalletController::class, 'show'], $wallet->id);
    }


    public function createIncome($id)
    {
        $wallet=Wallet::findOrFail($id);
        $incomeCategories=Income_category::all();
        return view('backend.users.wallets.createIncome',compact('incomeCategories','wallet'));
    }


    public function storeIncome(Request $request, Income $income, $id) {
        $wallet = Wallet::findOrFail($id);
        $income->wallet_id = $request->wallet_id;
        $income->name = $request->name;
        $income->income_category_id = $request->income_category_id;
        $income->amount = $request->amount;
        $income->note = $request->note;
        $income->save();
        return redirect()->action(WalletController::class, 'show');
    }
}

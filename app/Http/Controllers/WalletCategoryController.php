<?php

namespace App\Http\Controllers;

use App\Models\Wallet_category;
use Illuminate\Http\Request;

class WalletCategoryController extends Controller
{
    public function index()
    {
        $wallet_categories=Wallet_category::all();
        return view('backend.users.walletCategories.list',compact('wallet_categories'));
    }

    public function create()
    {
        return view('backend.users.walletCategories.create');
    }

    public function store(Request $request,Wallet_category $wallet_category)
    {
        $wallet_category->name=$request->name;
        if ($request->hasFile('icon')){
            $icon=$request->file('icon');
            $path=$icon->store('icons','public');
            $wallet_category->icon=$path;
        }
        $wallet_category->save();
        return redirect()->route('walletCategories.index');
    }

    public function edit($id)
    {
        $wallet_category=Wallet_category::findOrFail($id);
        return view('backend.users.walletCategories.update',compact('wallet_category'));
    }

    public function update(Request $request,$id)
    {
        $wallet_category=Wallet_category::findOrFail($id);
        $wallet_category->name=$request->name;
        if ($request->hasFile('icon')){
            $icon=$request->file('icon');
            $path=$icon->store('icons','public');
            $wallet_category->icon=$path;
        }
        $wallet_category->save();
        return redirect()->route('walletCategories.index');
    }

    public function delete($id)
    {
        $wallet_category=Wallet_category::findOrFail($id);
        $wallet_category->delete();
        session('success', 'delete success');
        return response()->json(['message','delete successfully']);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Cost_category;
use Illuminate\Http\Request;

class CostCategoryController extends Controller
{
    public function index()
    {
        $cost_categories=Cost_category::all();
        return view('backend.users.walletCategories.list',compact('cost_categories'));
    }

    public function create()
    {
        return view('backend.users.costCategories.create');
    }

    public function store(Request $request,Cost_category $cost_category)
    {
        $cost_category->name=$request->name;
        if ($request->hasFile('icon')){
            $icon=$request->file('icon');
            $path=$icon->store('icons','public');
            $cost_category->icon=$path;
        }
        $cost_category->save();
        return redirect()->route('costCategories.index');
    }

    public function edit($id)
    {
        $cost_category=Cost_category::findOrFail($id);
        return view('backend.users.costCategories.update',compact('cost_category'));
    }

    public function update(Request $request,$id)
    {
        $cost_category=Cost_category::findOrFail($id);
        $cost_category->name=$request->name;
        if ($request->hasFile('icon')){
            $icon=$request->file('icon');
            $path=$icon->store('icons','public');
            $cost_category->icon=$path;
        }
        $cost_category->save();
        return redirect()->route('costCategories.index');
    }

    public function delete($id)
    {
        $cost_category=Cost_category::findOrFail($id);
        $cost_category->delete();
        session('success', 'delete success');
        return response()->json(['message','delete successfully']);
    }
}

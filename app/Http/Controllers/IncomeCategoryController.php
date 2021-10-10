<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Income_category;

class InComeCategoryController extends Controller
{
    public function index()
    {
        $income_categories = Income_category::all();
        return view('backend.users.incomeCategories.list', compact('income_categories'));
    }


    public function create()
    {
        return view('backend.users.incomeCategories.create');
    }


    public function store(Request $request)
    {
        $income_category = new Income_category();
        $income_category->name = $request->name;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $path = $icon->store('icons', 'public');
            $income_category->icon = $path;
        }
        $income_category->save();
        return redirect()->route('incomeCategories.index');
    }


    public function edit($id)
    {
        $income_category = Income_category::findOrFail($id);
        return view('backend.users.incomeCategories.update', compact('income_category'));
    }


    public function update(Request $request, $id)
    {
        $income_category = Income_category::findOrFail($id);
        $income_category->name = $request->name;
        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $path = $icon->store('icons', 'public');
            $income_category->icon = $path;
        }
        $income_category->save();
        return redirect()->route('incomeCategories.index');
    }


    public function delete($id)
    {
        $income_category = Income_category::findOrFail($id);
        $income_category->delete();
        return response()->json(['message','delete successfully']);
    }
}

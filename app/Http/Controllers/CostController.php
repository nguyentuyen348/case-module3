<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use App\Models\Cost_category;
use Illuminate\Http\Request;

class CostController extends Controller
{
    public function index()
    {
        $costs=Cost::all();
        return view('backend.users.costs.list',compact('costs'));
    }

    public function create()
    {
        $costCategories=Cost_category::all();
        return view('backend.users.costs.create',compact('costCategories'));
    }

    public function store(Request $request,Cost $cost)
    {
        $cost->name=$request->name;
        $cost->cost_category_id=$request->cost_category_id;
        $cost->amount=$request->amount;
        $cost->note=$request->note;
        $cost->save();
        return redirect()->route('costs.index');
    }

    public function edit($id)
    {
        $cost=Cost::findOrFail($id);
        $costCategories=Cost_category::all();
        return view('backend.users.costs.update',compact('cost','costCategories'));
    }

    public function update(Request $request,$id)
    {
        $cost=Cost::findOrFail($id);
        $cost->name=$request->name;
        $cost->cost_category_id=$request->cost_category_id;
        $cost->amount=$request->amount;
        $cost->note=$request->note;
        $cost->save();
        return redirect()->route('costs.index');
    }

    public function delete($id)
    {
        $cost=Cost::findOrFail($id);
        $cost->delete();
        session('success', 'delete success');
        return response()->json(['message','delete successfully']);
    }
}

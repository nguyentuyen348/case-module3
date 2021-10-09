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
        return view('backend.users.costCategories.list',compact('costs'));
    }

    public function create()
    {
        $cost_categories=Cost_category::all();
        return view('backend.users.costCategories.create',compact('cost_categories'));
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

}

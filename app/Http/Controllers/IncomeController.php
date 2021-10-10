<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use App\Models\Income_category;

class IncomeController extends Controller
{
    public function index(){
        $incomes = Income::all();
        $income_categories = Income_category::all();
        return view('backend.users.incomes.list', compact('incomes', 'income_categories'));
    }


    public function create(){
        $income_categories = Income_category::all();
        return view('backend.users.incomes.create', compact('income_categories'));
    }


    public function store(Request $request){
        $income = new Income();
        $income->name = $request->name;
        $income->amount = $request->amount;
        $income->note = $request->note;
        $income->income_category_id = $request->income_category_id;
        $income->save();
        return redirect()->route('incomes.index');
    }


    public function edit($id){
        $income=Income::findOrFail($id);
        $incomeCategories=Income_category::all();
        return view('backend.users.incomes.update',compact('income','incomeCategories'));
    }


    public function update(Request $request,$id)
    {
        $income=Income::findOrFail($id);
        $income->name=$request->name;
        $income->amount=$request->amount;
        $income->note=$request->note;
        $income->income_category_id=$request->income_category_id;
        $income->save();
        return redirect()->route('incomes.index');
    }

    
    
    public function delete($id)
    {
        $income=Income::findOrFail($id);
        $income->delete();
        session('success', 'delete success');
        return response()->json(['message','delete successfully']);
    }


}

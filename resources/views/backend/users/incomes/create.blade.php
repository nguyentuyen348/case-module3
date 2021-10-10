@extends('backend.layout.master')
@section('title','Create Income')
@section('content')
    <div>
    <form action=" {{ route('incomes.store') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-md-9">
            <label for="category">Create Income</label>
            <input type="text" name="name" class="form-control" id="category" aria-describedby="">
            <small id="" class="form-text text-muted"></small>
        </div>
        
        <div class="form-group col-md-9">
            <label for="">Amount</label>
            <input type="text" name="amount" class="form-control" id="">
        </div>
        
        <div class="form-group col-md-9">
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" rows="3" name="note"></textarea>
            </div>
        </div>

        <div class="form-group col-md-9">
            <label for="icon">Icon</label>
            @foreach($income_categories as $income_category) 
            <input type="checkbox" name="income_category_id" id="income_category_id" value="{{ $income_category->id }}">
            <img src="{{ asset('storage/'. $income_category->icon) }}" alt="" width="100px">
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection

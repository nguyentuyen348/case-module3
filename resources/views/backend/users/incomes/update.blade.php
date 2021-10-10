@extends('backend.layout.master')
@section('title', 'Update Income')
@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Update Income</label>
                <input type="text" name="name" value="{{ $income->name }}" class="form-control" id="category"
                    aria-describedby="">
                <small id="" class="form-text text-muted"></small>
            </div>

            <div class="form-group col-md-9">
                <label for="">Amount</label>
                <input type="text" name="amount" value="{{ $income->amount }}" class="form-control" id="">
            </div>

            <div class="form-group col-md-9">
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" id="note" rows="3" name="note" value="{{ $income->note }}"></textarea>
                </div>
            </div>

            <div class="form-group col-md-9">
                <label for="icon">Icon</label>
                @foreach ($incomeCategories as $incomeCategory)
                    <input @if ($income->checkCategoryId($incomeCategory->id))
                    checked
                @endif
                type="checkbox" id="income_category_id-{{ $incomeCategory->id }}" name="income_category_id"
                value="{{ $incomeCategory->id }}">
                <label for="income_category_id-{{ $incomeCategory->id }}"><img width="100px"
                        src="{{ asset('storage/' . $incomeCategory->icon) }}" alt="{{ asset('storage/' . $incomeCategory->icon) }}">
                </label>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

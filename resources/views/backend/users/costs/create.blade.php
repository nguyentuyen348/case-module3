@extends('backend.layout.master')
@section('title','create')
@section('content')
    <div>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-md-9">
            <label for="category">Create Cost</label>
            <input type="text" name="name" class="form-control" id="category" aria-describedby="">
            <small id="" class="form-text text-muted"></small>
        </div>
        <div class="form-group col-md-9">
            <label for="icon">Icon</label>
            <input type="text" name="cost_category_id" class="form-control" id="">
        </div>
        <div class="form-group col-md-9">
            <label for="">Amount</label>
            <input type="text" name="amount" class="form-control" id="">
        </div>
        <div class="form-group col-md-9">
            <div class="form-group">
                <label for="note">Note</label>
                <textarea class="form-control" id="note" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection

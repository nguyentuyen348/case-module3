@extends('backend.layout.master')
@section('title','Update Cost Category')
@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Cost Category</label>
                <input type="text" class="form-control" id="category" value="{{$cost_category->name}}" name="name" aria-describedby="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group col-md-9">
                <label for="icon">Icon</label>
                <input type="file" value="{{$cost_category->icon}}" class="form-control" id="icon" name="icon">
                <img width="100px" src="{{asset('storage/'.$cost_category->icon)}}" alt="{{asset('storage/'.$cost_category->icon)}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

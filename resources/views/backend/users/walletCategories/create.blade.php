@extends('backend.layout.master')
@section('title','')
@section('content')
    <div>
        <div>
            <h6>Create Wallet Category</h6>
        </div>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-md-9">
            <label for="category">Name</label>
            <input type="text" name="name" class="form-control" id="category" aria-describedby="" placeholder="enter name">
            <small id="" class="form-text text-muted"></small>
        </div>
        <div class="form-group col-md-9">
            <label for="icon">Icon</label>
            <input type="file" name="icon" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection

@extends('backend.layout.master')
@section('title', 'Create Income Category')
@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Create Income Category </label>
                <input type="text" name="name" class="form-control" id="category" aria-describedby="">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <small id="" class="form-text text-muted"></small>
            </div>
            <div class="form-group col-md-9">
                <label for="icon">Icon</label>
                <input type="file" name="icon" class="form-control" id="">
                @error('icon')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

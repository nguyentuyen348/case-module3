@extends('backend.layout.master')
@section('title','Create Cost')
@section('content')
    <div>
        <div>
            <h6>Create Cost</h6>
        </div>
        <form action="{{route('costs.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Name</label>
                <input type="text" name="name" class="form-control" id="category" aria-describedby="" placeholder="enter name">
                <small id="" class="form-text text-muted"></small>
            </div>
            <label>Icon</label>

            <div class="form-group col-md-9" style="display: flex">
                <br>
                @foreach($costCategories as $costCategory)
                    <div style="display: flex;padding: 0 40px 10px 0">
                        <div>
                    <input type="checkbox" id="cost_category_id" name="cost_category_id" value="{{$costCategory->id}}">
                        </div>
                    <div>
                        <label for="">{{$costCategory->name}}</label>
                        <br>
                        <label for=""><img width="50px" src="{{asset('storage/'.$costCategory->icon)}}"
                                           alt="{{asset('storage/'.$costCategory->icon)}}">
                        </label>
                    </div>
                    <div>

                    </div>
                </div>
                @endforeach
                    <br>
            </div>

            <div class="form-group col-md-9">
                <label for="">Amount</label>
                <input type="text" name="amount" class="form-control" id="" placeholder="enter amount">
            </div>
            <div class="form-group col-md-9">
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" name="note" id="note" rows="3" placeholder="note:"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

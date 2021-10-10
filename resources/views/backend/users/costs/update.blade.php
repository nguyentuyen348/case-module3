@extends('backend.layout.master')
@section('title','update')
@section('content')
    <div>
        <h6>Update Cost</h6>
    </div>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="">Name</label>
                <input type="text" class="form-control" id="cost" value="{{$cost->name}}" name="name" aria-describedby="">
                {{--<small id="emailHelp" class="form-text text-muted"></small>--}}
            </div>

            <div class="form-group col-md-9">
                <label for="icon">Icon</label>
                <br>
                @foreach($costCategories as $costCategory)
                    <input  @if($cost->checkCategoryId($costCategory->id))
                              checked
                            @endif
                              type="checkbox" id="cost_category_id-{{$costCategory->id}}" name="cost_category_id" value="{{$costCategory->id}}">
                   {{-- <label for="cost_category_id-{{$costCategory->id}}">{{$costCategory->name}}</label>--}}
                    <label for="cost_category_id-{{$costCategory->id}}"><img width="100px" src="{{asset('storage/'.$costCategory->icon)}}"
                                       alt="{{asset('storage/'.$costCategory->icon)}}">
                    </label>
                @endforeach
                <br>
            </div>

            <div class="form-group col-md-9">
                <label for="">Amount</label>
                <input type="text" class="form-control" id="amount" value="{{$cost->amount}}" name="amount" aria-describedby="">
            </div>

            <div class="form-group col-md-9">
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" name="note" id="note" rows="3">{{$cost->note}}</textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

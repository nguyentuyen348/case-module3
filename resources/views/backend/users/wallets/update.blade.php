@extends('backend.layout.master')
@section('title','')
@section('content')
    <div>
        <h3>UPDATE</h3>
    </div>
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="">NAME</label>
                <input type="text" class="form-control" id="" value="{{$wallet->name}}" name="name" aria-describedby="">
            </div>

            <div class="form-group col-md-9">
                <label for="">AMOUNT</label>
                <input type="text" class="form-control" id="" value="{{$wallet->amount}}" name="amount"
                       aria-describedby="">
            </div>

            {{--  <div class="form-group col-md-9">
                  <label for="icon">Icon</label>
                  @foreach($walletCategories as $walletCategory)
                      <input  @if($wallet->checkCategoryId($walletCategory->id))
                              checked
                              @endif
                              type="checkbox" id="cost_category_id-{{$wallet->wallet_category->id}}" name="cost_category_id" value="{{$wallet->wallet_category->id}}">
                      --}}{{-- <label for="cost_category_id-{{$costCategory->id}}">{{$costCategory->name}}</label>--}}{{--
                      <label for="cost_category_id-{{$wallet->wallet_category->id}}"><img width="100px" src="{{asset('storage/'.$wallet->wallet_category->icon)}}"
                                                                               alt="{{asset('storage/'.$walletCategory->icon)}}">
                      </label>
                  @endforeach
              </div>--}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

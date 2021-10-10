@extends('backend.layout.master')
@section('title','')
@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Wallet Category</label>
                <input type="text" class="form-control" id="category" value="{{$wallet_category->name}}" name="name" aria-describedby="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group col-md-9">
                <label for="icon">Icon</label>
                @foreach($walletCategories as $walletCategory)
                    <input  @if($wallet->checkCategoryId($walletCategory->id))
                            checked
                            @endif
                            type="checkbox" id="cost_category_id-{{$walletCategory->id}}" name="cost_category_id" value="{{$walletCategory->id}}">
                    {{-- <label for="cost_category_id-{{$costCategory->id}}">{{$costCategory->name}}</label>--}}
                    <label for="cost_category_id-{{$walletCategory->id}}"><img width="100px" src="{{asset('storage/'.$walletCategory->icon)}}"
                                                                             alt="{{asset('storage/'.$walletCategory->icon)}}">
                    </label>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

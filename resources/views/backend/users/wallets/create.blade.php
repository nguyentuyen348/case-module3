@extends('backend.layout.master')
@section('title','')
@section('content')
    <div>
        <div>
            <h6>Wallet Table</h6>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Wallet Name</label>
                <input type="text" name="name" class="form-control" id="category" aria-describedby="">
                <small id="" class="form-text text-muted"></small>
            </div>
            <div class="form-group col-md-9">
                <label for="icon">Icon</label>
                <br>

                    @foreach($walletCategories as $walletCategory)
                        <input type="checkbox" id="wallet_category_id" name="wallet_category_id" value="{{$walletCategory->id}}">
                    <label for="">{{$walletCategory->name}}</label>
                    <label for=""><img width="100px" src="{{asset('storage/'.$walletCategory->icon)}}" alt="{{asset('storage/'.$walletCategory->icon)}}">
                    </label>
                        <br>
                    @endforeach

            </div>
            <div class="form-group col-md-9">
                <label for="">Amount</label>
                <input type="text" name="amount" class="form-control" id="">
            </div>
            <div>
                <select name="money-type" id="">
                    <option value="VND">VND</option>
                    <option value="USD">USD</option>
                    <option value="GBP">GBP</option>
                    <option value="JPY">JPY</option>
                    <option value="EURO">EURO</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

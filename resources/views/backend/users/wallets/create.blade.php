@extends('backend.layout.master')
@section('title','')
@section('content')
    <div>
        <div>
            <h6>Create Wallet</h6>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Name</label>
                <input type="text" name="name" class="form-control" id="category" aria-describedby=""
                       placeholder="enter name wallet">
                <small id="" class="form-text text-muted"></small>
            </div>
            <div class="form-group col-md-9">
                

                <div class="form-group col-md-9" style="display: flex">
                    <br>
                    @foreach($walletCategories as $walletCategory)
                        <div style="display: flex;padding: 0 40px 10px 0">
                            <div>
                                <input type="checkbox" id="wallet_category_id" name="wallet_category_id"
                                       value="{{$walletCategory->id}}">
                            </div>
                            <div>
                                <label for="">{{$walletCategory->name}}</label>
                                <br>
                                <!-- <label for=""><img width="50px" src="{{asset('storage/'.$walletCategory->icon)}}"
                                                   alt="{{asset('storage/'.$walletCategory->icon)}}">
                                </label> -->
                            </div>
                            <div>

                            </div>
                        </div>
                    @endforeach
                    <br>
                </div>
            </div>
            <div class="form-group col-md-9">
                <label for="">Amount</label>
                <input type="text" name="amount" class="form-control" id="" placeholder="enter amount">
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

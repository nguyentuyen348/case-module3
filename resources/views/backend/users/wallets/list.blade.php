@extends('backend.layout.master')
@section('title','')
@section('content')
    <div>
        <a href="{{route('wallets.create')}}" class="btn btn-success">create new</a>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4"  >
                    <div class="card-header pb-0" >
                        <h6>Wallet Table</h6>
                    </div>
                    <div class="row">
                        <div class="col-12" style="display: flex;flex-wrap: wrap; clear: both">
                            @foreach($wallets as $wallet)
                            <div class="col-md-4" style="text-align: center;">
                                <img style="width: 50px" src="{{asset('storage/'.$wallet->wallet_category->icon)}}" alt="">
                                <p>{{$wallet->name}}</p>
                                <p>{{$wallet->amount}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('backend.layout.master')
@section('title','')
@section('content')
    <div style="margin-left: 22px">
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
                        <div class="col-12" style="display: flex;flex-wrap: wrap; clear: both;">

                            @foreach($wallets as $wallet)
                            <div class="col-md-4" style="text-align: center;padding: 20px 20px 20px 20px; ">
                                <div style="width: 250px;border: 2px solid;border-radius: 50px;" >
                                    <a href="{{route('wallets.detail',$wallet->id)}}">
                                        @if(isset($wallet->wallet_category))
                                <img style="width: 50px;padding-top: 20px" src="{{asset('storage/'.$wallet->wallet_category->icon)}}" alt="{{asset('storage/'.$wallet->wallet_category->icon)}}">
                                        @endif
                                    <p>{{$wallet->name}}</p>
                                    </a>
                                <p>{{ number_format($wallet->amount) }}</p>

                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

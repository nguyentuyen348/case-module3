@extends('backend.layout.master')
@section('title','')
@section('content')

    <div style="margin-left: 22px">
        <a href="{{route('walletCategories.create')}}" class="btn btn-success">create new</a>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Wallet Category Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr >
                                    <th class="col-md-2"><p>NAME</p></th>
                                    <th class="col-md-2"><p>ICON</p></th>
                                    <th class="col-md-4" ><p>ACTION</p></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wallet_categories as $wallet_category)
                                    <tr id="wallet-category-{{$wallet_category->id}}">
                                        <td>
                                        <p style="margin-left: 17px"> {{$wallet_category->name}}</p>
                                        </td>
                                        <td>
                                            <img width="100px" src="{{asset('storage/'.$wallet_category->icon)}}" alt="{{asset('storage/'.$wallet_category->icon)}}">
                                        </td>
                                        <td>
                                            <a href="{{route('walletCategories.edit',$wallet_category->id)}}" class="btn btn-warning" >UPDATE</a>
                                            <button data-id="{{$wallet_category->id}}" class="btn btn-danger delete-wallet-category">delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


@endsection


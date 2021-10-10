@extends('backend.layout.master')
@section('title','')
@section('content')
    <style>
        th{
            color: #156cbb;
        }
        button{
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4>{{$wallet->name}} <span><a class="btn btn-primary" href="{{route('wallets.update',$wallet->id)}}">UPDATE</a> </span> <span><a class="btn btn-danger" href="{{route('wallets.delete',$wallet->id)}}">DELETE</a> </span></h4>
                        <p><span>TOTAL:</span><span>{{$wallet->amount}}</span><span>VND</span></p>
                    </div>
                    <div>
                        <div class="card-header pb-0">
                            <h5>COSTS LIST</h5>
                            <button class="btn btn-success"><a style="color: #3333d5;" href="{{route('costs.create')}}" >ADD</a></button>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0" style="text-align: center">
                                    <thead>
                                    <tr >
                                        <th class="col-md-2"><p>NAME</p></th>
                                        <th class="col-md-2"><p>ICON</p></th>
                                        <th class="col-md-2 "><p>AMOUNT</p></th>
                                        <th class="col-md-2"><p>NOTE</p></th>
                                        <th class="col-md-2"><p>CREATED</p></th>
                                        <th class="col-md-2" ><p>ACTION</p></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($costs as $cost)
                                        <tr id="cost-{{$cost->id}}">
                                            <td>
                                                {{$cost->name}}
                                            </td>
                                            <td>
                                                <img width="100px" src="{{asset('storage/'.$cost->cost_category->icon)}}" alt="{{asset('storage/'.$cost->cost_category->icon)}}">
                                            </td>
                                            <td>
                                                {{$cost->amount}}
                                            </td>
                                            <td>
                                                {{$cost->note}}
                                            </td>
                                            <td>
                                                {{$cost->created_at}}
                                            </td>
                                            <td>

                                                <button class="btn btn-warning"><a style="color: #3333d5;" href="{{route('costs.edit',$cost->id)}}">UPDATE</a></button>
                                                <button data-id="{{$cost->id}}" class="btn btn-danger delete-cost" style="color: wheat">DELETE</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <hr>
                                    <fbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td> <p style="color: red"> <span>TOTAL:</span><span style="margin-right: 40px">{{$wallet->amount}}</span> </p></td>
                                        </tr>
                                    </fbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

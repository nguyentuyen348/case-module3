@extends('backend.layout.master')
@section('title','list cost category')
@section('content')

    <div>
        <a href="{{route('costCategories.create')}}" class="btn btn-success">create new</a>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Cost Category Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-md-4">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 col-md-4">Icon</th>
                                    <th class="text-secondary opacity-7 col-md-4" >Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cost_categories as $cost_category)
                                    <tr id="wallet-category-{{$cost_category->id}}">
                                        <td>
                                            {{$cost_category->name}}
                                        </td>
                                        <td>
                                            <img width="100px" src="{{asset('storage/'.$cost_category->icon)}}" alt="{{asset('storage/'.$cost_category->icon)}}">
                                        </td>
                                        <td>
                                            <a href="{{route('walletCategories.edit',$cost_category->id)}}" class="btn btn-warning" >UPDATE</a>
                                            <button data-id="{{$cost_category->id}}" class="btn btn-danger delete-wallet-category">delete</button>
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


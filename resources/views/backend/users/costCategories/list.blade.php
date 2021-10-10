@extends('backend.layout.master')
@section('title','list cost category')
@section('content')

    <div style="margin-left: 22px">
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 col-md-2"><p style="padding-left: 20px">Name</p></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 col-md-2"><p style="padding-left: 20px">Icon</p></th>
                                    <th class="text-secondary opacity-7 col-md-4" ><p>ACTION</p></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cost_categories as $cost_category)
                                    <tr id="cost-category-{{$cost_category->id}}">
                                        <td>
                                           <p style="padding-left: 30px"> {{$cost_category->name}}</p>
                                        </td>
                                        <td>
                                            <img width="100px" src="{{asset('storage/'.$cost_category->icon)}}" alt="{{asset('storage/'.$cost_category->icon)}}">
                                        </td>
                                        <td>
                                            <a href="{{route('costCategories.edit',$cost_category->id)}}" class="btn btn-warning" >UPDATE</a>
                                            <button data-id="{{$cost_category->id}}" class="btn btn-danger delete-cost-category">delete</button>
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


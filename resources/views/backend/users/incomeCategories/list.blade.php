@extends('backend.layout.master')
@section('title','List Cost Income')
@section('content')

    <div style="margin-left: 22px">
        <a href="{{route('incomeCategories.create')}}" class="btn btn-success">create new</a>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Income Category Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="col-md-4"><p>NAME</p></th>
                                    <th class="col-md-4"><p>ICON</p></th>
                                    <th class="col-md-4"><p>ACTION</p></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($income_categories as $income_category)
                                    <tr class="table-active" id="income-category-{{$income_category->id}}">
                                        <td>
                                            {{$income_category->name}}
                                        </td>
                                        <td>
                                            <img width="100px" src="{{asset('storage/'.$income_category->icon)}}" alt="{{asset('storage/'.$income_category->icon)}}">
                                        </td>  
                                        <td>
                                            <a href="{{route('incomeCategories.edit',$income_category->id)}}" class="btn btn-warning" >UPDATE</a>
                                            <button data-id="{{$income_category->id}}" class="btn btn-danger delete-income-category">DELETE</button>
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


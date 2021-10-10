@extends('backend.layout.master')
@section('title','List Cost')
@section('content')


    <div style="margin-left: 22px">
        <a href="{{route('costs.create')}}" class="btn btn-success">create new</a>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Costs Table</h6>
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
                                    <tr class="table-active" id="cost-{{$cost->id}}">
                                        <td>
                                            {{$cost->name}}
                                        </td>
                                        <td>
                                            @if($cost->cost_category)
                                            <img width="100px" src="{{asset('storage/'.$cost->cost_category->icon)}}" alt="{{asset('storage/'.$cost->cost_category->icon)}}">
                                            @endif
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
                                            <a href="{{route('costs.edit',$cost->id)}}" class="btn btn-warning" >UPDATE</a>
                                            <button data-id="{{$cost->id}}" class="btn btn-danger delete-cost">delete</button>
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


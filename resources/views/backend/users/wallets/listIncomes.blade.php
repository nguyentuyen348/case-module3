@extends('backend.layout.master')
@section('title','List Income')
@section('content')

    <div style="margin-left: 22px">
        <h4><span>{{$wallet->name}}</span></h4>
        <p><span>TOTAL:</span><span>{{$wallet->amount}} (VND)</span></p>
        <a href="{{route('wallets.createIncome',$wallet->id)}}" class="btn btn-success">create new</a>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Incomes Table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" style="text-align: center">
                                <thead>
                                <tr>
                                    <th class="col-md-2"><p>NAME</p></th>
                                    <th class="col-md-2 "><p>AMOUNT</p></th>
                                    <th class="col-md-2"><p>NOTE</p></th>
                                    <th class="col-md-2"><p>CREATED</p></th>
                                    <th class="col-md-2"><p>ICON</p></th>
                                    <th class="col-md-2"><p>ACTION</p></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($incomes as $income)
                                    <tr class="table-active" id="income-{{$income->id}}">
                                        <td>
                                            {{$income->name}}
                                        </td>

                                        <td>
                                            {{ number_format($income->amount, 3) }}
                                        </td>
                                        <td>
                                            {{$income->note}}
                                        </td>
                                        <td>
                                            {{$income->created_at}}
                                        </td>
                                        <td>
                                            @if($income->income_category)
                                                <img width="100px"
                                                     src="{{asset('storage/'.$income->income_category->icon)}}"
                                                     alt="{{asset('storage/'.$income->income_category->icon)}}">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('incomes.edit',$income->id)}}"
                                               class="btn btn-warning">UPDATE</a>
                                            <button data-id="{{$income->id}}" class="btn btn-danger delete-income">delete
                                            </button>
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


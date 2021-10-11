@extends('backend.layout.master')
@section('title','')
@section('content')
    <style>
        th {
            color: #156cbb;
        }

        button {
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4><span>{{$wallet->name}}</span>
                            <span>
                               {{-- <div class="dropdown" style="border: 1px solid black">--}}
                                <span class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                </span>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class=" dropdown-item" href="{{route('wallets.update',$wallet->id)}}"><strong>UPDATE</strong></a>
                                    <a class=" dropdown-item" href="{{route('wallets.delete',$wallet->id)}}"><strong>DELETE</strong></a>
                                </div>
                              {{--  </div>--}}
                            </span></h4>

                        <p><span>TOTAL:</span><span>{{$wallet->amount}}</span><span>(VND)</span></p>
                    </div>
                    <div>

                        <div class="col-12" style="display: flex;">
                            <div class="card-body px-0 pt-0 pb-2 col-md-6" style="background: lightblue;border-radius: 1em">
                                <div class="card-header" style="background: cornflowerblue">
                                    <a href="{{route('wallets.createCost',$wallet->id)}}">add</a>
                                    <h5>COSTS LIST
                                        <span>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>
                                            </a>
                                        </span>
                                    </h5>
                                </div>
                                <div class="table-responsive p-0">

                                    <table class="table align-items-center mb-0" style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th class="col-md-2"><p>NAME</p></th>
                                            {{--<th class="col-md-2"><p>ICON</p></th>--}}
                                            <th class="col-md-2"><p>CREATED</p></th>
                                            <th class="col-md-2 "><p>AMOUNT</p></th>
                                            {{-- <th class="col-md-2"><p>NOTE</p></th>
                                             <th class="col-md-2"><p>CREATED</p></th>
                                             <th class="col-md-2" ><p>ACTION</p></th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($costs)
                                            @foreach($costs as $cost)
                                            <tr id="cost-{{$cost->id}}">
                                                <td>
                                                    <div>{{$cost->name}}</div>
                                                    <div><img width="50px"
                                                         src="{{asset('storage/'.$cost->cost_category->icon)}}"
                                                         alt="{{asset('storage/'.$cost->cost_category->icon)}}">
                                                    </div>
                                                </td>
                                                <td>
                                                    {{$cost->created_at}}
                                                </td>
                                                <td>
                                                    {{$cost->amount}} <span>(VND)</span>
                                                </td>
                                                {{--    <td>
                                                        {{$cost->note}}
                                                    </td>
                                                    <td>
                                                        {{$cost->created_at}}
                                                    </td>
                                                    <td>

                                                        <button class="btn btn-warning"><a style="color: #3333d5;" href="{{route('costs.edit',$cost->id)}}">UPDATE</a></button>
                                                        <button data-id="{{$cost->id}}" class="btn btn-danger delete-cost" style="color: wheat">DELETE</button>
                                                    </td>--}}
                                            </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <fbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><p style="color: red"><span>TOTAL:</span><span
                                                            style="margin-right: 40px">{{$wallet->amount}}</span></p>
                                                </td>
                                            </tr>
                                        </fbody>
                                    </table>
                                </div>
                            </div>
                            <div style="width: 20px">

                            </div>
                            <div style="background: lightblue;border-radius: 1em" class="card-body px-0 pt-0 pb-2 col-md-6">
                                <div class="card-header" style="background: deepskyblue;" >
                                    <h5>INCOMES LIST
                                        <span>
                                            <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>
                                            </a>
                                        </span>
                                    </h5>
                                </div>
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0" style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th class="col-md-2"><p>NAME</p></th>
                                           {{-- <th class="col-md-2"><p>ICON</p></th>--}}
                                            <th class="col-md-2"><p>CREATED</p></th>
                                            <th class="col-md-2 "><p>AMOUNT</p></th>
                                            {{-- <th class="col-md-2"><p>NOTE</p></th>
                                             <th class="col-md-2"><p>CREATED</p></th>
                                             <th class="col-md-2" ><p>ACTION</p></th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($costs)
                                            @foreach($costs as $cost)
                                            <tr id="cost-{{$cost->id}}">
                                                <td>
                                                    <div>{{$cost->name}}</div>
                                                    <div><img width="50px"
                                                              src="{{asset('storage/'.$cost->cost_category->icon)}}"
                                                              alt="{{asset('storage/'.$cost->cost_category->icon)}}">
                                                    </div>
                                                </td>
                                                <td>
                                                    {{$cost->created_at}}
                                                </td>
                                                <td>
                                                    {{$cost->amount}} <span>(VND)</span>
                                                </td>
                                                {{--    <td>
                                                        {{$cost->note}}
                                                    </td>
                                                    <td>
                                                        {{$cost->created_at}}
                                                    </td>
                                                    <td>

                                                        <button class="btn btn-warning"><a style="color: #3333d5;" href="{{route('costs.edit',$cost->id)}}">UPDATE</a></button>
                                                        <button data-id="{{$cost->id}}" class="btn btn-danger delete-cost" style="color: wheat">DELETE</button>
                                                    </td>--}}
                                            </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <fbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><p style="color: red"><span>TOTAL:</span><span
                                                            style="margin-right: 40px">{{$wallet->amount}}</span></p>
                                                </td>
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
    </div>
    <script>
        $(document).ready(function () {
            $('#exampleModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var recipient = button.data('whatever') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body input').val(recipient)
            })
        })
    </script>

@endsection

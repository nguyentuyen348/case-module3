@extends('backend.layout.master')
@section('title', 'Create InCome')
@section('content')
    <div>
        <div>
            <h6>Create InCome</h6>
        </div>
        <form action="{{ route('wallets.storeIncome', $wallet->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-9">
                <label for="category">Name</label>
                <input type="text" name="name" class="form-control" id="category" aria-describedby=""
                    placeholder="enter name">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <small id="" class="form-text text-muted"></small>
            </div>

            <div class="form-group col-md-9" hidden>
                <label for="wallet">Wallet</label>
                <input type="text" name="wallet_id" value="{{ $wallet->id }}">

                <small id="" class="form-text text-muted"></small>
            </div>

           
            <div class="form-group col-md-9" style="display: flex">
                <br>
                @foreach ($incomeCategories as $incomeCategory)
                    <div style="display: flex;padding: 0 40px 10px 0">
                        <div>
                            <input type="checkbox" id="income_category_id" name="income_category_id"
                                value="{{ $incomeCategory->id }}">
                        </div>
                        <div>
                            <label for="">{{ $incomeCategory->name }}</label>
                            <br>
                            <!-- <label for=""><img width="50px" src="{{ asset('storage/' . $incomeCategory->icon) }}"
                                    alt="{{ asset('storage/' . $incomeCategory->icon) }}">
                            </label> -->
                        </div>
                        <div>

                        </div>
                    </div>
                @endforeach
                <br>
            </div>

            <div class="form-group col-md-9">
                <label for="">Amount</label>
                <input type="text" name="amount" class="form-control" id="" placeholder="enter amount">
                @error('amount')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group col-md-9">
                <div class="form-group">
                    <label for="note">Note</label>
                    <textarea class="form-control" name="note" id="note" rows="3" placeholder="note:"></textarea>
                    @error('note')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

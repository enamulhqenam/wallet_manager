@extends('layouts.master');
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="text-align: center; font-size:2em;" class="mt-md-5 ">
                        <span >Edit Your Income </span>
                    </div>
                    <hr>

                    {{ Form::open(array('url'=>'/expense/update', 'method' => 'PATCH')) }}
                    <div class="form-group">
                        <label for="Category">Expense Category</label>
                        <div class="col-md-6">
                            <select name="CategoryID" id="" class="form-control mt-md-3 mb-md-3">
                                <option value=""> Select Category </option>
                                @foreach ($ExpenseCategories as $Category)
                                    @if($Expense->CategoryID ==  $Category->id )
                                    <option value="{{ $Category->id }}" selected>{{ $Category->Name }}</option>
                                    @else
                                        <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <label for="Name" class="form-lable ">Amount</label>
                        <input type="hidden" name="id" value="{{ $Expense->id }}">
                        <input type="Amount" name="Amount" class="form-control mt-md-3 mb-md-3" value="{{$Expense->Amount }}">
                        <label for="Name" class="form-lable ">Description</label>
                        <input type="text" name="Description" class="form-control mt-md-3 mb-md-3" value="{{$Expense->Description }}">
                        <label for="Name" class="form-lable ">Income Date</label>
                        <input type="Date" name="Expense_Date" class="form-control mt-md-3 mb-md-3" value="{{$Expense->Expense_Date }}">

                        <div class="btn">
                            <input type="submit" name="submit" id="" class="btn btn-primary mt-md-3"  value="Update Income">
                        </div>

                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="text-align: center; font-size:2em;" class="mt-md-5 ">
                        <span >Add Your Expense </span>
                    </div>
                    <hr>

                    {{ Form::open(array('url'=>'/expense')) }}
                    <div class="form-group">
                       
                        <div class="col-md-12">
                            <label for="Category">Income Category</label>
                            <select name="CategoryID" id="" class="form-control mt-md-3 mb-md-3">
                                <option value=""> Select Category </option>
                                @foreach ($ExpenseCategories as $Category)
                                    <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <label for="Name" class="form-lable ">Amount</label>
                        <input type="Amount" name="Amount" class="form-control mt-md-3 mb-md-3">
                        <label for="Name" class="form-lable ">Description</label>
                        <input type="text" name="Description" class="form-control mt-md-3 mb-md-3">
                        <label for="Name" class="form-lable ">Expense Date</label>
                        <input type="date" name="Expense_Date" class="form-control mt-md-3 mb-md-3">
                        <div class="btn">
                            <input type="submit" name="submit" id="" class="btn btn-primary mt-md-3"  value="Add Expense">
                        </div>
                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </main>
@endsection

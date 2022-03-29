@extends('layouts.master');
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="text-align: center; font-size:2em;" class="mt-md-5 ">
                        <span >Add Your Income </span>
                    </div>
                    <hr>

                    {{ Form::open(array('url'=>'/income')) }}
                    <div class="form-group">
                        <label for="Category">Income Category</label>
                        <div class="col-md-6">
                            <select name="CategoryID" id="" class="form-control mt-md-3 mb-md-3">
                                <option value=""> Select Category </option>
                                @foreach ($IncomeCategories as $Category)
                                    <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="Name" class="form-lable ">Amount</label>
                        <input type="Amount" name="Amount" class="form-control mt-md-3 mb-md-3">
                        <label for="Name" class="form-lable ">Description</label>
                        <input type="text" name="Description" class="form-control mt-md-3 mb-md-3">
                        <label for="Name" class="form-lable ">Income Date</label>
                        <input type="Date" name="Income_Date" class="form-control mt-md-3 mb-md-3">
                        <div class="btn">
                            <input type="submit" name="submit" id="" class="btn btn-primary mt-md-3"  value="Add Income">
                        </div>
                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </main>
@endsection

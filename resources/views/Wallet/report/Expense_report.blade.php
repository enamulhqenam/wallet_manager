@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-8">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Income Report</span>
                </div>
                {{ Form::open(array('url' => '/expense/report')) }}
                <div class="col-md-6">
                    <select name="CategoryID" id="" class="form-control mt-md-3 mb-md-3">
                        <option value=""> Select Category </option>
                        @foreach ($ExpenseCategory as $Category)
                                <option value="{{ $Category->id }}">{{ $Category->Name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="Name" class="form-lable ">Date From</label>
                    <input type="Date" name="Date_from" class="form-control mt-md-3 mb-md-3 ">
                    <label for="Name" class="form-lable ">Date To</label>
                    <input type="Date" name="Date_to" class="form-control mt-md-3 mb-md-3">
                    <div class="btn">
                        <input type="submit" name="submit" id="" class="btn btn-info mt-md-3"  value="Generate Income Report">
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</main>


@endsection

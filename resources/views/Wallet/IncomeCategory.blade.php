@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container">
        <div class="row">
            <div class="form-group col-md-8 mt-md-5">
                {{ Form::open(array('url' =>'/incomeCategory')) }}
                    <label for="Name" class="form-lable ">Category Name</label>
                    <input type="text" name="Name" class="form-control mt-md-4">

                    <div class="btn">
                        <input type="submit" name="submit" id="" class="btn btn-primary" value="Add Category">
                    </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>
</main>


@endsection

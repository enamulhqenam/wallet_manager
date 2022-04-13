@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="text-align: center; font-size:2em;" class="mt-md-5 ">
                        <span >Save  Contact </span>
                    </div>
                    <hr>

                    {{ Form::open(array('url'=>'/contact')) }}
                    
                        <label for="name" class="form-lable ">Name</label>
                        <input type="text" name="name" class="form-control mt-md-3 mb-md-3 border border-primary" required>
                        <label for="phone" class="form-lable ">Phone</label>
                        <input type="text" name="phone" class="form-control mt-md-3 mb-md-3 border border-primary" required>
                        <label for="mail" class="form-lable ">Email</label>
                        <input type="text" name="mail" class="form-control mt-md-3 mb-md-3 border border-primary" required>
                        <div class="btn">
                            <input type="submit" name="submit" id="" class="btn btn-primary mt-md-3"  value="Save Contact">
                        </div>
                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </main>
@endsection

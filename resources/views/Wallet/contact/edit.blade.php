@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="text-align: center; font-size:2em;" class="mt-md-5 ">
                        <span >Edit Your Income </span>
                    </div>
                    <hr>

                    {{ Form::open(array('url'=>'/contact/list/update', 'method' => 'POST')) }}
                    <div class="form-group">

                        
                        <input type="hidden" name="id" value="{{ $contact->id }}">
                        <label for="name" class="form-lable ">Name</label>
                        <input type="name" name="name" class="form-control mt-md-3 mb-md-3" value="{{$contact->name }}">
                        <label for="phone" class="form-lable ">Phone</label>
                        <input type="text" name="phone" class="form-control mt-md-3 mb-md-3" value="{{$contact->phone }}">
                        <label for="mail" class="form-lable ">Email</label>
                        <input type="mail" name="mail" class="form-control mt-md-3 mb-md-3" value="{{$contact->mail }}">

                        <div class="btn">
                            <input type="submit" name="submit" id="" class="btn btn-primary mt-md-3"  value="Update Contact">
                        </div>

                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </main>
@endsection

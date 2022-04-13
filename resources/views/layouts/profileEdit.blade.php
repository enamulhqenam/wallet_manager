@extends('layouts.master')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div style="text-align: center; font-size:2em;" class="mt-md-5 ">
                          <span >Edit Your Profile</span>
                      </div>
                      <hr>
  
                      {{ Form::open(array('url'=>'/profile/update', 'method' => 'POST' , 'enctype' => 'multipart/form-data')) }}
                      <div class="form-group">
                               @if(is_null($User->photo))
                                        <img src="/upload/users/logo.png" alt="" style="widht:100%; height:100px ; border-radius:50%">
                              @else
                                        <img src="/upload/users/{{$User->photo}}" alt="" style="widht:100% ; height:100px ; border-radius:50%">
                              @endif
                              <div class="from-control mt-md-3">
                                        <label for="name" class="form-lable">Name</label>
                                        <input type="name" name="name" class="form-control mt-md-3 mb-md-3" value="{{$User->name}}">
                                        <label for="email" class="form-lable ">Email</label>
                                        <input type="text" name="email" class="form-control mt-md-3 mb-md-3" value="{{$User->email}}">
                                        <label for="photo" class="form-lable ">Photo</label>
                                        <input type="file" name="photo" class="form-control mt-md-3 mb-md-3">
                               </div>
                              <div class="btn">
                                        <input type="submit" name="submit" id="" class="btn btn-primary mt-md-3"  value="Update Profile">
                              </div>
  
                      </div>
                      {{ Form::close() }}
  
                  </div>
              </div>
          </div>
      </main>
@endsection
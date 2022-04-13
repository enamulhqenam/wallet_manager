@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-9">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Contact List</span>
                </div>
                <table class="table table-responsive table-bordered table-stripped mt-md-3 font-weight-bold">
                    <thade>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thade>
                    <tbody>
                        @foreach ($saveList as $list)
                            <tr>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->phone }}</td>
                                <td>{{ $list->mail }}</td>
                                <td>
                                    <a href="/contact/{{$list->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/contact/{{$list->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


@endsection

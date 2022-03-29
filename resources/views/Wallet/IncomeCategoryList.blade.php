@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-6">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Income Category List</span>
                </div>
                <table class="table table-responsive table-bordered table-stripped mt-md-3 font-weight-bold">
                    <thade>
                        <tr>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thade>
                    <tbody>
                        @foreach ($Categories as $Category)
                            <tr>
                                <td>{{ $Category->Name }}</td>
                                <td>
                                    <a href="/incomeCategory/{{$Category->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/incomeCategory/{{$Category->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
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

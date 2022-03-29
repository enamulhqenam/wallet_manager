@extends('layouts.master')
@section('content')


<main class="col-lg-9 ms-sm-auto col-lg-10 px-lg-4">
    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Expense List</span>
                </div>
                <table class="table table-responsive table-bordered table-stripped mt-lg-3 font-weight-bold">
                    <thade>
                        <tr>
                            <th>Category Name</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Expense Date</th>
                            <th>Action</th>
                        </tr>
                    </thade>
                    <tbody>
                        @foreach ($Categories as $Category)
                            <tr>
                                <td>{{ $Category->CategoryName }}</td>
                                <td>{{ $Category->Amount }}</td>
                                <td>{{ $Category->Description }}</td>
                                <td>{{ $Category->Expense_Date }}</td>
                                <td>
                                    <a href="/expense/{{$Category->id}}/edit" class="btn btn-warning">Edit</a>
                                    <a href="/expense/{{$Category->id}}/delete" class="btn btn-danger mx-md-2">Delete</a>
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

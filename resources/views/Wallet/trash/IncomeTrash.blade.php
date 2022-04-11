@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-8">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Income Trash</span>
                </div>
                <div>
                    <a href="/income/restore" class="btn btn-success">Restore All</a>
                    <a href="/income/delete/permanently" class="btn btn-warning"><span class="iconify" data-icon="wpf:full-trash"></span>Empty Trash</a>
                </div>
                <table class="table table-responsive table-bordered table-stripped mt-md-6 font-weight-bold">
                    <thade>
                        <tr>
                            <th>Category Name</th>
                            <th>Amount</th>
                            <th>Description</th>
                            <th>Income Date</th>
                            <th>Action</th>
                        </tr>
                    </thade>
                    <tbody>
                        @foreach ($IncomeTrashed as $Category)
                            <tr>
                                <td>{{ $Category->CategoryName }}</td>
                                <td>{{ $Category->Amount }}</td>
                                <td>{{ $Category->Description }}</td>
                                <td>{{ $Category->Income_Date }}</td>
                                <td>
                                    <a href="/income/{{$Category->id}}/delete/permanently" class="btn btn-danger mx-md-2">Permanently Delete</a>
                                    <a href="/income/{{$Category->id}}/restore" class="btn btn-warning">Restore</a>

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

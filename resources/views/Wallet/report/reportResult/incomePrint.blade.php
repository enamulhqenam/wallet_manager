@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    {{--  table section   --}}
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-8">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Report result</span>
                </div>
                <table class="table table-responsive table-bordered table-stripped mt-md-6 font-weight-bold">
                    <thade>
                        <tr>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Income Date</th>
                            <th>Amount</th>
                        </tr>
                    </thade>
                    <tbody>
                        @foreach ($Incomes as $Income )
                        <tr>
                            <td>{{ $Income->CategoryName }}</td>
                            <td>{{ $Income->Description }}</td>
                            <td>{{ $Income->Income_Date }}</td>
                            <td>{{ $Income->Amount }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total Income = </td>
                            <td>{{ $totalIncome }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


@endsection

@extends('layouts.master')
@section('content')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    {{--  table section   --}}
    <div class="container mt-md-5">
        <div class="row">
            <div class="col-md-6">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Income Report result</span>
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
            <div class="col-md-6">
                <div class="header" style="font-size: 2em ; text-align:center;">
                    <span>Expense Report result</span>
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
                        @foreach ($Expenses as $Expense )
                        <tr>
                            <td>{{ $Expense->CategoryName }}</td>
                            <td>{{ $Expense->Description }}</td>
                            <td>{{ $Expense->Income_Date }}</td>
                            <td>{{ $Expense->Amount }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total Income = </td>
                            <td>{{ $totalExpense }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <h2>Rest Amount</h2>
                    <table class="table-responsive table-bordered table-stripeed col-md-6">
                        <thead>
                            <tr>
                                <th>Total Income =</th>
                                <th>{{$totalIncome}}</th>
                            </tr>
                            <tr>
                                <th>Total Expense = </th>
                                <th>{{$totalExpense}}</th>
                            </tr>
                            <tr>
                                <th>Rest Amount = </th>
                                <th>{{$totalIncome-$totalExpense}}</th>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4 printbutton">
                <button onclick="window.print()" class="btn btn-info px-md-4" >Print</button>
            </div>
        </div>
    </div>
</main>


@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomeCategory ;
use App\Models\Income ;
use App\Models\ExpenseCategory ;
use App\Models\Expense ;

class ReportController extends Controller
{
    public function incomeReport()
    {
        $IncomeCategories= IncomeCategory::all();
        return view('Wallet.report.Income_report',compact('IncomeCategories'));
    }

    public function printIncomeReport(Request $request)
    {
        // return $request->all();
        // $IncomeCategories= IncomeCategory::all();
      $Incomes = Income::select('incomes.*','income_categories.Name as CategoryName')
        ->leftJoin('income_categories','incomes.CategoryID','=','income_categories.id')
        ->where('CategoryID',$request->CategoryID)
        ->whereBetween('Income_Date',[$request->Date_from,$request->Date_to])
        ->get();


        $totalIncome = $Incomes->sum('Amount');
        return view('Wallet.report.reportResult.incomePrint',compact('Incomes','totalIncome'));

    }
    public function expenseReport()
    {
        $ExpenseCategory = ExpenseCategory::all();
        return view('Wallet.report.Expense_report',compact('ExpenseCategory'));
    }
    public function printExpenseReport(Request $request)
    {
        $Expenses = Expense::select('expenses.*','expense_categories.Name as CategoryName')
        ->leftJoin('expense_categories','expenses.CategoryID','=','expense_categories.id')
        ->whereBetween('Expense_Date',[$request->Date_from,$request->Date_to])
        ->get();
        $totalExpense = $Expenses->sum('Amount');

        return view('Wallet.report.reportResult.expensePrint',compact('Expenses','totalExpense'));
    }
}

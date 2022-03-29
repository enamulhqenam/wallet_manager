<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;


class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ExpenseCategories = ExpenseCategory::all();
        $Categories = Expense::select(
            'expenses.id',
            'expenses.CategoryID',
            'expenses.Amount',
            'expenses.Description',
            'expenses.Expense_Date',
            'expenses.created_at',
            'expenses.updated_at',
            'expenses.deleted_at',
            'expense_categories.Name as CategoryName'
        )
        ->leftJoin('expense_categories','expenses.CategoryID','=','expense_categories.id')->get();
        return view('Wallet.ExpenseList',compact('ExpenseCategories','Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ExpenseCategories = ExpenseCategory::all();
        return view('Wallet.Expense',compact('ExpenseCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Expense::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $ExpenseCategories = ExpenseCategory::all();
        $Expense=Expense::find($id);
        return view('Wallet.ExpenseEdit', compact('ExpenseCategories','Expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Expense = new Expense();
        $Expense = Expense::find($request->id);
        $Expense->CategoryID = $request->CategoryID;
        $Expense->Amount     = $request->Amount;
        $Expense->Description = $request->Description;
        $Expense->Expense_Date = $request->Expense_Date;

        $Expense->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();
        return $this->index();
    }
    public function trash()
    {
        // $ExpenseTrashed = Expense::onlyTrashed()->get();
        $ExpenseTrashed =DB::table('expenses')
        ->select(
            'expenses.*',
            'expense_categories.Name as CategoryName',
        )
        ->leftjoin('expense_categories','expenses.CategoryID','=','expense_categories.id')
        ->whereNotNull('expenses.deleted_at')
        ->get();
        return view('Wallet.trash.ExpenseTrash',compact('ExpenseTrashed'));
    }
    public function forceDelete($id)
    {
        Expense::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        Expense::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function emptyTrash()
    {
        Expense::onlyTrashed()->forceDelete();
        return back();
    }
    public function restoreAll()
    {
        Expense::withTrashed()->restore();
        return back();
    }
}

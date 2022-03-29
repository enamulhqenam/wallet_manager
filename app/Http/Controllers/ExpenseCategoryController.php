<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExpenseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories = ExpenseCategory::all();
        return view('Wallet.ExpenseCatergoryList',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Wallet.ExpenseCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ExpenseCategory::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCategory $expenseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ExpenseCategoris = ExpenseCategory::find($id);
        return view('Wallet.ExpenseCatergoryEdit',compact('ExpenseCategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        ExpenseCategory::find($request->id)->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCategory  $expenseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExpenseCategory::find($id)->delete();
        return $this->index();

    }
    public function trash()
    {
        $TrashCategories = ExpenseCategory::onlyTrashed()->get();
        return view('Wallet.trash.ExpenseCategoryTrash',compact('TrashCategories'));
    }
    public function forceDelete($id)
    {
        ExpenseCategory::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        ExpenseCategory::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function emptyTrash()
    {
        ExpenseCategory::onlyTrashed()->forceDelete();
        return back();
    }
    public function restoreAll()
    {
        ExpenseCategory::withTrash()->restore();
    }

}

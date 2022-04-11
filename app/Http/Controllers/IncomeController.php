<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\IncomeCategory;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $IncomeCategories= IncomeCategory::all();
        $Categories = Income::select(
        'incomes.id',
        'incomes.CategoryID',
        'incomes.Amount',
        'incomes.Description',
        'incomes.Income_Date',
        'incomes.created_at',
        'incomes.updated_at',
        'incomes.deleted_at',

        'income_categories.Name as CategeroyName'
    )
    ->where('created_by',auth()->user()->id)
    -> leftjoin ('income_categories', 'incomes.CategoryID','=','income_categories.id')->get();
        return view('Wallet.IncomeList',compact('Categories','IncomeCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $IncomeCategories = IncomeCategory::all();
        return view('Wallet.Income',compact('IncomeCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Income::create($request->all());
        // return back();

        $Income = new Income();

        $Income->CategoryID     = $request->CategoryID ;
        $Income->Amount         = $request->Amount;
        $Income->Description    = $request->Description;
        $Income->Income_Date    = date('Y-m-d');
        $Income->created_by     =auth()->user()->id;
        
        $Income->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $IncomeCategories = IncomeCategory::all();
        $Income = Income::find($id);
        return view('Wallet.IncomeEdit',compact('Income','IncomeCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return $request->all();
        // return Income::find($request->id)->update($request->all());
        $Income = new Income();
        $Income = Income::find($request->id);
        $Income->CategoryID = $request->CategoryID;
        $Income->Amount     = $request->Amount;
        $Income->Description= $request->Description;
        $Income->Income_Date= $request->Income_Date;

        $Income->save();

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Income::find($id)->delete();
        return $this->index();
    }
    public function trash()
    {
        // $IncomeTrashed = Income::onlyTrashed()->get();
       $IncomeTrashed = DB::table('incomes')
       ->select(
       'incomes.*',
       'income_categories.Name as CategoryName'
       )
        ->leftjoin('income_categories','incomes.CategoryID','=','income_categories.id')
        ->whereNotNull('incomes.deleted_at')
        ->get();

        return view('Wallet.trash.IncomeTrash',compact('IncomeTrashed'));
    }
    public function forceDelete($id)
    {
        Income::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        Income::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        Income::withTrashed()->restore();
        return back();
    }
    public function emptyTrash()
    {
        Income::onlyTrashed()->forceDelete();
        return back();
    }
}

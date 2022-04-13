<?php

namespace App\Http\Controllers;

use App\Models\IncomeCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories = IncomeCategory::all();
        return view('Wallet.IncomeCategoryList',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Wallet.IncomeCategory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            IncomeCategory::create($request->all());
            return back();
        } catch (Exception $error) {
            $error->getMessage();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeCategory $incomeCategory)
    {
        return IncomeCategory::find($incomeCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $IncomeCategoris = IncomeCategory::find($id);
        return view('Wallet.IncomeCategoryEdit',compact('IncomeCategoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        IncomeCategory::find($request->id)->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeCategory  $incomeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        IncomeCategory::find($id)->delete();
        return $this->index();
    }
    public function trash()
    {
        $TrashCategories = IncomeCategory::onlyTrashed()->get();
        return view('Wallet.trash.IncomeCategoryTrash',compact('TrashCategories'));
    }
    public function forceDelete($id)
    {
        IncomeCategory::withTrashed()->where('id',$id)->forceDelete();
        return back();
    }
    public function restore($id)
    {
        IncomeCategory::withTrashed()->where('id',$id)->restore();
        return back();
    }
    public function restoreAll()
    {
        IncomeCategory::withTrashed()->restore();
        return back();
    }
    public function emptyTrash()
    {
        IncomeCategory::onlyTrashed()->forceDelete();
        return back();
    }
}

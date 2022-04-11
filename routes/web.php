<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function(){
//Report route section
// income report
Route::get('report/income',[ReportController::class,'incomeReport']);
Route::post('income/report',[ReportController::class,'printIncomeReport']);
// expense report
Route::get('report/expense',[ReportController::class,'expenseReport']);
Route::post('expense/report',[ReportController::class,'printExpenseReport']);
//total report
Route::get('total/report',[ReportController::class,'totalReport']);
Route::post('total/report/result',[ReportController::class,'totalReportResult']);

//Report route section end.

//mail controler 
Route::get('/email',[MailController::class,'send']);
//mail controler end

// incomeCategory routs start
Route::get('income/category/trash',[IncomeCategoryController::class,'trash']);
Route::get('incomeCategory/{id}/delete/permanently',[IncomeCategoryController::class,'forceDelete']);
Route::get('/incomeCategory/{id}/restore',[IncomeCategoryController::class,'restore']);
Route::get('incomeCategory/delete/permanently',[IncomeCategoryController::class,'emptyTrash']);
Route::get('/incomeCategory/restore',[IncomeCategoryController::class,'restoreAll']);
//resource route.
Route::resource('incomeCategory', IncomeCategoryController::class);
// Route::get('income/category/list',[IncomeCategoryController::class,'index']);
// Route::get('income/category/create',[IncomeCategoryController::class,'create']);
// Route::post('income/category/store',[IncomeCategoryController::class,'store']);
// Route::post('income/category/update',[IncomeCategoryController::class,'update']);
// Route::get('income/category/edit/{id}',[IncomeCategoryController::class,'edit']);
Route::get('incomeCategory/{id}/delete',[IncomeCategoryController::class,'destroy']);

// incomeCategory routs Stop

// Income Routes Start
Route::get('income/trash',[IncomeController::class,'trash']);
Route::get('income/{id}/delete/permanently',[IncomeController::class,'forceDelete']);
Route::get('income/{id}/restore',[IncomeController::class,'restore']);
Route::get('income/delete/permanently',[IncomeController::class,'emptyTrash']);
Route::get('income/restore',[IncomeController::class,'restoreAll']);
//Income Route
Route::resource('income', IncomeController::class);

// Route::get('income/list',[IncomeController::class,'index']);
// Route::get('income/create',[IncomeController::class,'create']);
// Route::post('income/store',[IncomeController::class,'store']);
// Route::post('income/update',[IncomeController::class,'update']);
// Route::get('income/edit/{id}',[IncomeController::class,'edit']);
Route::get('income/{id}/delete',[IncomeController::class,'destroy']);

// ExpenseCategory routs start
Route::get('expense/category/trash',[ExpenseCategoryController::class,'trash']);
Route::get('/expenseCategory/{id}/delete/permanently',[ExpenseCategoryController::class,'forceDelete']);
Route::get('/expenseCategory/{id}/restore',[ExpenseCategoryController::class,'restore']);
Route::get('/expenseCategory/delete/permanently',[ExpenseCategoryController::class,'emptyTrash']);
Route::get('expenseCategory/restore',[ExpenseCategoryController::class,'restoreAll']);

//resource Route
Route::resource('expenseCategory', ExpenseCategoryController::class);
// Route::get('expense/category/list',[ExpenseCategoryController::class,'index']);
// Route::get('expense/category/create',[ExpenseCategoryController::class,'create']);
// Route::post('expense/category/store',[ExpenseCategoryController::class,'store']);
// Route::post('expense/category/update',[ExpenseCategoryController::class,'update']);
// Route::get('expense/category/edit/{id}',[ExpenseCategoryController::class,'edit']);
Route::get('expenseCategory/{id}/delete',[ExpenseCategoryController::class,'destroy']);
// ExpenseCategory routs Stop

// Expense Routes Start
Route::get('expense/trash',[ExpenseController::class,'trash']);
Route::get('expense/{id}/delete/permanently',[ExpenseController::class,'forceDelete']);
Route::get('expense/{id}/restore',[ExpenseController::class,'restore']);
Route::get('expense/delete/permanently',[ExpenseController::class,'emptyTrash']);
Route::get('expense/restore',[ExpenseController::class,'restoreAll']);
//Resource Route
Route::resource('expense', ExpenseController::class);

// Route::get('expense/list',[ExpenseController::class,'index']);
// Route::get('expense/create',[ExpenseController::class,'create']);
// Route::post('expense/store',[ExpenseController::class,'store']);
// Route::post('expense/update',[ExpenseController::class,'update']);
// Route::get('expense/edit/{id}',[ExpenseController::class,'edit']);
Route::get('expense/{id}/delete',[ExpenseController::class,'destroy']);



});

require __DIR__.'/auth.php';

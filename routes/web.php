<?php
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdjustmentController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CurreciesController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\BrandController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::get('/expenses', [ExpensesController::class, 'index'])->name('expenses');
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
Route::get('/quotation', [QuotationController::class, 'index'])->name('quotation');
Route::get('/report', [ReportController::class, 'index'])->name('report');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/warehouse', [WarehouseController::class, 'index'])->name('warehouse');
Route::get('/adjustment', [AdjustmentController::class, 'index'])->name('adjustment');
Route::get('/sale', [SellController::class, 'index'])->name('sale');
Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/currency', [CurreciesController::class, 'index'])->name('currency');
Route::get('/pos', [PosController::class, 'index'])->name('pos');
Route::get('/brand', [BrandController::class, 'index'])->name('brand');

Route::post('/category/post',[CategoryController::class, 'store'])->name('category.store');
Route::get('/category/show',[CategoryController::class, 'show'])->name('category.show');


<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/admin', function () {
    return redirect('/admin');
});

Route::get('/', [Controllers\Landing\LandingController::class, 'index']);
Route::get('/about', [Controllers\Landing\LandingController::class, 'about']);
Route::get('/services', [Controllers\Landing\LandingController::class, 'services']);
Route::get('/message', [Controllers\Landing\LandingController::class, 'message']);
Route::get('/partner', [Controllers\Landing\LandingController::class, 'partner']);
Route::get('/enterprise', [Controllers\Landing\LandingController::class, 'enterprise']);
Route::get('/media', [Controllers\Landing\LandingController::class, 'media']);
Route::get('/contact', [Controllers\Landing\LandingController::class, 'contact']);


Auth::routes();


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/settings', [Controllers\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [Controllers\SettingController::class, 'store'])->name('settings.store');
    Route::post('/commissions/taskstore', [Controllers\TaskController::class, 'storeTask'])->name('commissions.taskstore');
    Route::get('/tasks', [Controllers\TaskController::class, 'index'])->name('tasks.index');
    Route::resource('products', Controllers\ProductController::class);
    Route::resource('customers', Controllers\CustomerController::class);
    Route::resource('orders', Controllers\OrderController::class);
    Route::resource('agents', Controllers\AgentController::class);
    Route::resource('vendors', Controllers\VendorController::class);
    Route::resource('employees', Controllers\EmployeeController::class);
    Route::get('/pay-salaries', [Controllers\PaySalary::class, 'index'])->name('employees.pay-salaries');
    Route::get('/attendance', [Controllers\Attendance::class, 'index'])->name('employees.attendance');
    Route::get('/activities', [Controllers\Activity::class, 'index'])->name('employees.activities');
    Route::resource('categories', Controllers\CategoryController::class);
    Route::resource('subcategories', Controllers\SubcategoryController::class);
    Route::resource('salaries', Controllers\PaySalaryController::class);
    Route::resource('rewords', Controllers\PointController::class);
    Route::resource('commissions', Controllers\CommissionController::class);
    Route::resource('purchases', Controllers\PurchaseController::class);
    Route::resource('all-admins', Controllers\AdminController::class);

    // discount related routes
    Route::resource('catdiscounts', Controllers\CatDiscountController::class);
    Route::resource('subcatdiscounts', Controllers\SubcatDiscountController::class);

    Route::get('/cart', [Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [Controllers\CartController::class, 'store'])->name('cart.store');
    Route::post('/cart/change-qty', [Controllers\CartController::class, 'changeQty']);
    Route::delete('/cart/delete', [Controllers\CartController::class, 'delete']);
    Route::delete('/cart/empty', [Controllers\CartController::class, 'empty']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use  App\Http\Controllers\products\ProductController;
use  App\Http\Controllers\products\ListProductController;
use App\Http\Controllers\category\CategoryController;
use  App\Http\Controllers\orders\OrderController;
use  App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\roles\RolesController;
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
Route::get("/dasboard",[DasboardController::class,"dasboard"]);
Route::get("/product/add-product",[ProductController::class,"add_product"]);
Route::get("/product/list-product",[ListProductController::class,"list_product"]);

//category
Route::get("/category/add-category",[CategoryController::class,"add_category"]);
Route::get("/category/list-category",[CategoryController::class,"list_category"]);
Route::post("/category/store_category",[CategoryController::class,"store_category"]);
Route::get("/category/delete/{did}",[CategoryController::class,"delete_category"]);
Route::get("/category/edit/{eid}",[CategoryController::class,"edit_category"]);
Route::post("/category/update",[CategoryController::class,"update_category"]);

//order
Route::get("/order/order-list",[OrderController::class,"order_list"]);
Route::get("/order/order-details",[OrderController::class,"order_details"]);
Route::get("/order/order-tracking",[OrderController::class,"order_tracking"]);

//Login
Route::get("/admin/login",[LoginController::class,"login"]);
Route::get("/admin/all_user",[LoginController::class,"all_user"]);
Route::get("/admin/add_user",[LoginController::class,"add_user"]);

//user roles
Route::get("/roles/add_role",[RolesController::class,"add_role"]);
Route::get("/roles/all_role",[RolesController::class,"all_role"]);
Route::post("/roles/store_role",[RolesController::class,"store_role"]);

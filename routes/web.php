<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use  App\Http\Controllers\products\ProductController;
use  App\Http\Controllers\products\ListProductController;
use App\Http\Controllers\category\CategoryController;
use  App\Http\Controllers\orders\OrderController;
use  App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\roles\RolesController;
use App\Http\Controllers\admin\UserController;
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
//product
Route::group(['middleware' => 'admin'], function () {
Route::get("/dasboard",[DasboardController::class,"dasboard"]);
Route::get("/product/add-product",[ProductController::class,"add_product"]);
Route::get("/product/list-product",[ListProductController::class,"list_product"]);
Route::post("/product/store-product",[ProductController::class,"store_product"]);
Route::get("/products/delete-product/{id}",[ListProductController::class,"delete_product"]);
Route::get("/products/edit-product/{id}",[ListProductController::class,"edit_product"]);
Route::post("/product/update-product",[ProductController::class,"update_product"]);
Route::get("/products/product-details",[ListProductController::class,"product_details"]);


//category
Route::get("/category/add-category",[CategoryController::class,"add_category"]);
Route::get("/category/list-category",[CategoryController::class,"list_category"]);
Route::post("/category/store_category",[CategoryController::class,"store_category"]);
Route::get("/category/delete/{did}",[CategoryController::class,"delete_category"]);
Route::get("/category/edit/{eid}",[CategoryController::class,"edit_category"]);
Route::post("/category/update",[CategoryController::class,"update_category"]);

//order
Route::get("/order/order-list",[OrderController::class,"order_list"]);
Route::get("/order/order-details/{order_id}",[OrderController::class,"order_details"]);
Route::get("/order/order-tracking",[OrderController::class,"order_tracking"]);
Route::get("/orders/edit-order/{id}",[OrderController::class,"order_edit"]);
Route::get("/orders/delete-order{id}",[OrderController::class,"order_delete"]);
Route::post("/update_order",[OrderController::class,"update_order"]);



//user roles
Route::get("/roles/add_role",[RolesController::class,"add_role"]);
Route::get("/roles/all_role",[RolesController::class,"all_role"]);
Route::post("/roles/store_role",[RolesController::class,"store_role"]);
Route::get("/roles/edit-role/{id}",[RolesController::class,"edit_role"]);
Route::get("/roles/delete-role/{id}",[RolesController::class,"delete_role"]);


});


//Login
Route::get("/admin/login",[LoginController::class,"login"])->name("login");
Route::post("/admin/logincheck",[LoginController::class,"loginCheck"]);
Route::get("/admin/logout",[LoginController::class,"logout"]);

Route::get("/admin/sign-up",[UserController::class,"sign_up"]);
Route::post("/admin/store-sign-up",[UserController::class,"store_signUp"]);
Route::get("/admin/all_user",[UserController::class,"all_user"]);
Route::get("/admin/add_user",[UserController::class,"add_user"]);
Route::post("/admin/store_new_user",[UserController::class,"store_new_user"]);
Route::get("/user/user_delete/{did}",[UserController::class,"user_delete"]);
Route::get("/user/user-edit/{eid}",[UserController::class,"user_edit"]);
Route::post("/admin/user_update",[UserController::class,"update_user"]);





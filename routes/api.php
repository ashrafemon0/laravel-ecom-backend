<?php

use App\Http\Controllers\Admin\AllSiteInformation;
use App\Http\Controllers\Admin\categoriesController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getvisitor',[VisitorController::class,'GetVisitor']);
Route::post('/contact',[ContactController::class,'PostContact']);

//All Site Information
Route::get('/allsiteinformation',[AllSiteInformation::class,'AllSiteInfo']);

//Category Route
Route::get('/allCategory',[categoriesController::class,'AllCategory']);

//Product List Route
Route::get('/Productlistbyremark/{remark}',[ProductListController::class,'ProductListByRemark']);

//Product List Category Route
Route::get('/Productlistbycategory/{category}',[ProductListController::class,'ProductListByCategory']);

//Product List SubCategory Route
Route::get('/Productlistbysubcategory/{category}/{subcategory}',[ProductListController::class,'ProductListBySubCategory']);

//HomeSlider Route
Route::get('/homeslider',[HomeSliderController::class,'AllHomeSlider']);

//ProductDetails Route
Route::get('/productdetails/{id}',[ProductDetailsController::class,'ProductDetails']);

//Notification Route
Route::get('/notification',[NotificationController::class,'AllNotification']);

//Notification Route
Route::get('/search/{key}',[ProductListController::class,'ProductBySearch']);

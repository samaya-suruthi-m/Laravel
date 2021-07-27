<?php
use LaravelCurd\Curd\Http\Controllers\CustomerController;

Route::get('curd', function(){
	return 'Hello from the curd package';
});

Route::group(['middleware' => ['web']], function () {
Route::get('form', function(){
	return view('curd::pages.form1');
});
Route::get('index', [CustomerController::class, 'index']);
Route::post('store', [CustomerController::class, 'storeData']);
Route::get('delete', [CustomerController::class, 'deleteData']);
Route::post('updateData', [CustomerController::class, 'updateData']);
Route::get('update', [CustomerController::class, 'showUpdate']);

});
?>
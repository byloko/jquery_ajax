<?php
use Illuminate\Http\Request;
use App\OrdersModel;

Route::get('', 'HomeController@home');
// https://vegibit.com/laravel-ajax-crud-tutorial/
Route::get('admin/login', 'AuthController@login');
Route::post('admin/login', 'AuthController@post_login');
Route::get('admin/logout', 'AuthController@logout');

Route::get('terms', 'PageController@terms');
Route::get('privacy', 'PageController@privacy');

Route::get('activate/{token}', 'AuthController@activate');
Route::get('email_verification', 'AuthController@email_verification');

Route::get('jjjj',function(){
	return view('dddd');
});

Route::group(['middleware' => 'admin'], function(){

	Route::get('admin/dashboard', 'Backend\DashboardController@dashboard_index');

	Route::get('admin/user', 'Backend\UserController@user_index');
	Route::get('admin/user/add', 'Backend\UserController@user_create');
	Route::post('admin/user/add', 'Backend\UserController@user_store');
	Route::get('admin/user/view/{id}', 'Backend\UserController@user_show');
	Route::get('admin/user/edit/{id}', 'Backend\UserController@user_edit');
	Route::post('admin/user/edit/{id}', 'Backend\UserController@user_update');
	Route::get('admin/user/delete/{id}', 'Backend\UserController@user_destroy');
	Route::get('admin/user/changeStatus', 'Backend\UserController@user_change_status');
	Route::get('admin/user/view_delete/{id}', 'Backend\UserController@user_view_delete');
	

	Route::get('admin/mearchant', 'Backend\UserController@mearchant_index');
	Route::get('admin/mearchant/add', 'Backend\UserController@mearchant_create');
	Route::post('admin/mearchant/add', 'Backend\UserController@mearchant_store');
	Route::get('admin/mearchant/view/{id}', 'Backend\UserController@mearchant_show');
	Route::get('admin/mearchant/edit/{id}', 'Backend\UserController@mearchant_edit');
	Route::post('admin/mearchant/edit/{id}', 'Backend\UserController@mearchant_update');
	Route::get('admin/mearchant/delete/{id}', 'Backend\UserController@mearchant_destroy');
	Route::get('admin/mearchant/mearchant_delete/{id}', 'Backend\UserController@mearchant_delete');
	Route::get('admin/mearchant/changeStatus', 'Backend\UserController@mearchant_change_status');
	Route::get('admin/mearchant/view_delete/{id}', 'Backend\UserController@mearchant_view_delete');


	Route::get('admin/orders', 'Backend\OrdersController@orders_index');
	Route::get('admin/orders/view/{id}', 'Backend\OrdersController@orders_view');
	Route::get('admin/orders/delete/{id}', 'Backend\OrdersController@orders_destroy');
	Route::get('admin/orders/view_delete/{id}', 'Backend\OrdersController@orders_view_destroy');

	Route::get('admin/order_details', 'Backend\OrderDetailsController@order_details_list');
	Route::get('admin/order_details/delete/{id}', 'Backend\OrderDetailsController@order_details_destroy');


	Route::get('admin/version_setting', 'Backend\VersionSettingController@version_setting_index');
	Route::post('admin/version_setting/add', 'Backend\VersionSettingController@version_setting_insert');

	Route::get('admin/myaccount', 'Backend\MyAccountController@my_account_index');
	Route::post('admin/myaccount/add', 'Backend\MyAccountController@my_account_update');

	Route::get('admin/product', 'Backend\ProductController@product_index');
	Route::post('admin/product/store', 'Backend\ProductController@product_store');
	Route::post('admin/product/index_show', 'Backend\ProductController@index_show');
	Route::get('admin/product/edit_show/{id}', 'Backend\ProductController@edit_show');
	Route::post('admin/product/update_show', 'Backend\ProductController@update_show');
	Route::get('admin/product/view_show/{id}', 'Backend\ProductController@view_show');
	Route::post('admin/product/delete_record/{id}', 'Backend\ProductController@delete_record');

	Route::get('admin/product/product_excel_import', 'Backend\ProductController@product_excel_import');
	Route::post('admin/product/product_excel_import', 'Backend\ProductController@product_excel_store');
	Route::get('admin/product/product_excel_export', 'Backend\ProductController@product_excel_export');

	Route::get('admin/orders/add', function(){
		$data['meta_title'] = 'Add Orders';
        return view('backend.orders.add', $data);
	});


	Route::post('admin/orders/add', function(Request $request){
		// dd(request()->all());
	  $insert_r                   = new OrdersModel;
      $insert_r->orders_name      = trim($request->orders_name);
      $insert_r->save();
      return redirect('admin/orders')->with('success', 'Record successfully register.');
      // return Response::json($insert_r);
	});
	
	Route::get('admin/orders/edit/{id}', function(Request $request, $id){
		$data['getrecord'] = OrdersModel::get_single($id);
		$data['meta_title'] = 'Edit Orders';
        return view('backend.orders.edit', $data);
	});
	
	Route::post('admin/orders/edit/{id}', function(Request $request, $id){
		$user_update = OrdersModel::get_single($id);
        $user_update->orders_name = $request->orders_name;
        $user_update->save();
      	return redirect('admin/orders')->with('success', 'Record successfully update.');
       // return Response::json($user_update);
	});
	
	



});

?>
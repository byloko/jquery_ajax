<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('app_mearchant_normal_user', 'APIController@app_mearchant_normal_user');
Route::post('app_social_login', 'APIController@app_social_login');
Route::post('app_register', 'APIController@app_register');

Route::post('app_login', 'APIController@app_login');

Route::post('app_orders_add', 'APIController@app_orders_add');
Route::post('app_orders_user_list', 'APIController@app_orders_user_list');

Route::post('app_order_details_list', 'APIController@app_order_details_list');
Route::post('app_order_details_add', 'APIController@app_order_details_add');

Route::post('app_update_profile', 'APIController@app_update_profile');
Route::post('app_forgot_email', 'APIController@app_forgot_email');

Route::post('app_version_setting_update', 'APIController@app_version_setting_update');
Route::post('app_version_setting_list', 'APIController@app_version_setting_list');

Route::post('app_mearchant_list', 'APIController@app_mearchant_list');
Route::post('app_normal_user_list', 'APIController@app_normal_user_list');

Route::post('app_orders_update', 'APIController@app_orders_update');

Route::post('app_select_mearchant', 'APIController@app_select_mearchant');

Route::post('app_notification_store_list', 'APIController@app_notification_store_list');

Route::post('app_payment_orders_update', 'APIController@app_payment_orders_update');

Route::post('app_notification_store_user_list', 'APIController@app_notification_store_user_list');

Route::post('app_verify_otp', 'APIController@app_verify_otp');

Route::post('app_resend_otp', 'APIController@app_resend_otp');

Route::post('app_store_mobile_otp', 'APIController@app_store_mobile_otp');

Route::post('app_update_password', 'APIController@app_update_password');

Route::post('app_add_money_wallet', 'APIController@app_add_money_wallet');

Route::post('app_wallet_details_list', 'APIController@app_wallet_details_list');

Route::post('app_bank_detail_add', 'APIController@app_bank_detail_add');

Route::post('app_user_list', 'APIController@app_user_list');

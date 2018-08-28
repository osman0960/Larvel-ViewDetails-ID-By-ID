<?php

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
//logout
Route::get('/logout','AdminController@logout');

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin login...
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

//viewprofile
Route::get('/viewprofile','AdminController@viewprofile');

//setting
Route::get('/setting','AdminController@setting');

//addstudent
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@savestudent');

//viewstudent
Route::get('/student_view/{student_id}','AllstudentsController@studentview');

//deletestudent
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');

//allstudent
Route::get('/allstudent','AllstudentsController@allstudent');


//tutionfee
Route::get('/tutionfee','TutionController@tution');

//cse
Route::get('/cse','CSEController@cse');

//esc
Route::get('/ece','ECEController@ece');

//bba
Route::get('/bba','BBAController@bba');

//eee
Route::get('/eee','EEEController@eee');

//mba
Route::get('/mba','MBAController@mba');

//allteacher
Route::get('/allteacher','TeacherController@allteacher');

<?php


Route::get('/', ['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login', ['as'=>'login','uses'=>'LoginController@postLogin']);

Route::get('/noPermission',function(){
  return view('permission.noPermission');
});

Route::group(['middleware'=>['authen']],function(){
Route::get('/logout', ['as'=>'logout','uses'=>'LoginController@getLogout']);
});
//-----------for Admin---------------------
Route::group(['middleware'=>['authen','roles'],'roles'=>['admin']],function(){
	//for admin
  // Route::get('/createUser',function(){
  // 	echo "This is for admin test.";
  // });
//==========================
  Route::get('/dashboard', ['as'=>'dashboard','uses'=>'DashboardController@dashboard']);

  Route::get('/manage/course',['as'=>'manageCourse','uses'=>'CourseController@getManageCourse']);
//==========================
  Route::post('/manage/course/insert',['as'=>'postInsertAcademic','uses'=>'CourseController@postInsertAcademic']);
//==========================
  Route::post('/manage/course/insert-program',['as'=>'postInsertProgram','uses'=>'CourseController@postInsertProgram']);

//==========================
	Route::post('/manage/course/insert-level',['as'=>'postInsertLevel','uses'=>'CourseController@postInsertLevel']);

//==========================
	Route::get('/manage/course/showLevel',['as'=>'showLevel','uses'=>'CourseController@showLevel']);

//==========================
  Route::post('/manage/course/shift',['as'=>'createShift','uses'=>'CourseController@createShift']);

//==========================
  Route::post('/manage/course/time',['as'=>'createTime','uses'=>'CourseController@createTime']);

//==========================
  Route::post('/manage/course/batch',['as'=>'createBatch','uses'=>'CourseController@createBatch']);

//==========================
  Route::post('/manage/course/group',['as'=>'createGroup','uses'=>'CourseController@createGroup']);

//==========================
  Route::post('/manage/course/class',['as'=>'createClass','uses'=>'CourseController@createClass']);

//==========================
  Route::get('/manage/course/classinfo',['as'=>'showClassInformation','uses'=>'CourseController@showClassInformation']);

//==========================
  Route::post('/manage/course/class/delete',['as'=>'deleteClass','uses'=>'CourseController@deleteClass']);

//==========================
  Route::get('/manage/course/class/edit',['as'=>'editClass','uses'=>'CourseController@editClass']);

//==========================
  Route::post('/manage/course/class/update',['as'=>'updateClassInfo','uses'=>'CourseController@updateClassInfo']);



//==========Student Register================

  Route::get('/Student/getregister',['as'=>'getStudentRegister','uses'=>'StudentController@getStudentRegister']);

  Route::post('/Student/postregister',['as'=>'postStudentRegister','uses'=>'StudentController@postStudentRegister']);

  Route::get('/Student/info',['as'=>'studentInfo','uses'=>'StudentController@studentInfo']);

//==========Fee Controller================

  Route::get('/Student/show/payment',['as'=>'getPayment','uses'=>'FeeController@getPayment']);
  Route::get('/Student/payment',['as'=>'showStudentPayment','uses'=>'FeeController@showStudentPayment']);
  Route::get('/Student/go/to/payment/{student_id}',['as'=>'goPayment','uses'=>'FeeController@goPayment']);
  Route::post('/Student/payment/save',['as'=>'savePayment','uses'=>'FeeController@savePayment']);
  Route::post('/fee/create',['as'=>'createFee','uses'=>'FeeController@createFee']);
  Route::get('/fee/student/pay',['as'=>'pay','uses'=>'FeeController@pay']);
  Route::post('/fee/student/extrapay',['as'=>'extraPay','uses'=>'FeeController@extraPay']);
  Route::get('/fee/student/print/invoice/{receiptId}',['as'=>'printInvoice','uses'=>'FeeController@printInvoice']);
  Route::get('/fee/student/transaction/delete/{transactId}',['as'=>'deleteTransact','uses'=>'FeeController@deleteTransact']);
  Route::get('/fee/student/show/level',['as'=>'showLevelStudent','uses'=>'FeeController@showLevelStudent']);
//-----------Fee Report--------------------- 
  Route::get('/fee/report',['as'=>'getFeeReport','uses'=>'FeeController@getFeeReport']); 
  Route::get('/fee/show/fee-report',['as'=>'showFeeReport','uses'=>'FeeController@showFeeReport']); 

//route test

  Route::get('/create/student/level',['as'=>'createStudentLevel','uses'=>'FeeController@createStudentLevel']);

//--------Student Report----------------  

    Route::get('/report/student-list',['as'=>'getStudentList','uses'=>'ReportController@getStudentList']);
    Route::get('/report/student-info',['as'=>'showStudentInfo','uses'=>'ReportController@showStudentInfo']);
    Route::get('/report/student-multi-class',['as'=>'getStudentListMultiClass','uses'=>'ReportController@getStudentListMultiClass']);
    Route::get('/report/student-info-multi-class',['as'=>'showStudentListMultiClass','uses'=>'ReportController@showStudentListMultiClass']);
});



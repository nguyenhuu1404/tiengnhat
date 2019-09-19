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
Route::get('/test', 'HomeController@index');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::namespace('Voyager')->group(function () {
        Route::get('baocao', 'ReportController@index')->middleware('admin.user')->name('report.index');
        Route::get('questions/{id}/answers', 'QuestionController@answers')->middleware('admin.user')->name('question.answer');
        Route::get('comments/{id}/answers', 'CommentController@answers')->middleware('admin.user')->name('comment.answer');
        Route::get('comments', 'CommentController@index')->middleware('admin.user')->name('comment.index');
    });
});

Route::group(['as' => 'frontend.', 'namespace' => 'Frontend'], function() {
    Auth::routes();
    Route::get('/thong-bao/dang-nhap', 'HomeController@relogin');
    Route::group(['middleware' => ['checkLogin']], function () {
        Route::get('/login/facebook', 'Auth\LoginController@redirectToProviderFacebook');
        Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallbackFacebook');
        Route::get('/login/google', 'Auth\LoginController@redirectToProviderGoogle');
        Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');

        Route::get('/thong-bao', 'MessageController@index');
        Route::get('/thong-bao/{id}-{slug}', 'MessageController@detail')->where(['id' => '[0-9]+']);;

        Route::get('/khoa-hoc', 'PackageController@index');
        Route::get('/khoa-hoc/don', 'PackageController@course');
        Route::get('/khoa-hoc/combo', 'PackageController@coursecombo');
        Route::get('/khoa-hoc-cua-toi', 'PackageController@myPackage');
        Route::get('/khoa-hoc/package/{id}-{slug}', 'PackageController@combo')->where(['id' => '[0-9]+']);
        Route::get('/khoa-hoc/{id}-{slug}', 'CourseController@index')->where(['id' => '[0-9]+']);
        Route::get('/khoa-hoc/{course}/{courseId}-{id}-{slug}', 'LessonController@index')->where(['id' => '[0-9]+', 'courseId' => '[0-9]+']);

        Route::get('/thanh-toan/{id}-{slug}', 'PaymentController@course')->where(['id' => '[0-9]+']);
        Route::post('/payment/paymentCourse', 'PaymentController@paymentCourse');
        Route::get('/payment/successCourse/{courseId}', 'PaymentController@successCourse')->where(['courseId' => '[0-9]+']);
        Route::post('/payment/successCourse/{courseId}', 'PaymentController@successCourse')->where(['courseId' => '[0-9]+']);
        Route::get('/payment/thank/{key}', 'PaymentController@thank');
        Route::get('/payment/more/{key}', 'PaymentController@more');

        Route::get('/thanh-toan/package/{id}-{slug}', 'PaymentController@combo')->where(['id' => '[0-9]+']);
        Route::post('/payment/paymentPackage', 'PaymentController@paymentPackage');
        Route::get('/payment/successPackage/{packageId}', 'PaymentController@successPackage')->where(['packageId' => '[0-9]+']);
        Route::post('/payment/successPackage/{packageId}', 'PaymentController@successPackage')->where(['packageId' => '[0-9]+']);

        Route::get('/gia-han/{id}-{slug}', 'PaymentController@moreCourse')->where(['id' => '[0-9]+']);
        Route::get('/gia-han/package/{id}-{slug}', 'PaymentController@moreCombo')->where(['id' => '[0-9]+']);
        Route::post('/course/addComment', 'CourseController@addComment');
        Route::post('/lesson/addComment', 'LessonController@addComment');

        Route::get('/tin-tuc', 'NewController@index');
        Route::get('/danh-muc/{id}-{slug}', 'NewController@category');
        Route::get('/tin-tuc/{id}-{slug}', 'NewController@detail')->where(['id' => '[0-9]+']);
        Route::get('/ho-tro', 'FaqController@index');
        Route::get('/lien-he', 'ContactController@index');
        Route::post('/lien-he', 'ContactController@save');
        Route::get('/trang-ca-nhan', 'UserController@info');
        Route::post('/user/update', 'UserController@update')->name('users.update');
        Route::get('/khoa-hoc-tieng-nhat-online-n5-full-gia-chi-500k', 'PageController@landing')->name('n5.landing');
        Route::get('/khoa-hoc-tieng-nhat-online-combo-n5-n4-uu-dai-gia-chi-1trieu-dong', 'PageController@landing4')->name('n4n5.landing');
        Route::post('/save/landing', 'PageController@saveLanding')->name('save.landing');
        Route::get('/cam-nhan-cua-hoc-vien', 'PageController@camnhan');
        Route::get('/{slug}', 'PageController@index');

        Route::get('/', 'HomeController@index')->name('home.index');

    });

});

Route::group(['as' => 'api.', 'prefix' => 'api', 'namespace' => 'Frontend'], function() {
    Route::post('/course/getCourses', 'CourseController@getCourses')->name('course.getCourses');
    Route::post('/package/getComboPackages', 'PackageController@getComboPackages')->name('package.getComboPackages');
    Route::post('/test/getTests', 'TestController@index')->name('test.index');
    Route::post('/payment/updatePhone', 'PaymentController@updatePhone')->name('payment.updatePhone');
    Route::post('/payment/checkGift', 'PaymentController@checkGift')->name('payment.checkGift');
    Route::post('/payment/checkGiftCombo', 'PaymentController@checkGiftCombo')->name('payment.checkGiftCombo');
    Route::post('/payment/updateAddress', 'PaymentController@updateAddress')->name('payment.updateAddress');

});




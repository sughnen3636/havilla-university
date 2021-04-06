<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-us/{key}', function () {
	if (request()->key === 'about-us') {
		$title = 'Havilla | About Us';
    	return view('about', compact('title'));
	}elseif (request()->key === 'our-vision') {
		$title = 'Havilla | Our Vision';
		return view('vision', compact('title'));
	}elseif (request()->key === 'our-mission') {
		$title = 'Havilla | Our Mission';
		return view('keys', compact('title'));
	}elseif (request()->key === 'our-core-values') {
		$title = 'Havilla | Our Core Values';
		return view('values', compact('title'));
	}elseif (request()->key === 'our-philosophy') {
		$title = 'Havilla | Our Philosophy';
		return view('philosophy', compact('title'));
	}
})->name('about');

Route::get('details', function () {
	$title = 'Havilla | The History';
    return view('history', compact('title'));
})->name('history');

Route::get('fees-schedule', function () {
	$title = 'Havilla | School Fees Schedule';
    return view('fees', compact('title'));
})->name('fees');

Route::get('our-faculties', function () {
	$title = 'Havilla | Faculties';
    return view('courses', compact('title'));
})->name('courses');

Route::get('news', 'App\Http\Controllers\PostController@index')->name('news');

Route::post('contact-us', 'App\Http\Controllers\PostController@sendContactFrm')->name('contact');

Route::get('faculty/{faculty}', 'App\Http\Controllers\FacultyController@showDepts')->name('faculty');
Route::get('department/{dept}', 'App\Http\Controllers\FacultyController@singleDept')->name('dept');

Route::get('admissions', 'App\Http\Controllers\AdmissionController@index')->name('admissions');
Route::get('apply', 'App\Http\Controllers\AdmissionController@applyForm')->name('apply');
Route::get('apply/{dept}', 'App\Http\Controllers\AdmissionController@applyFromDept')->name('dept-apply');
Route::post('apply-submit', 'App\Http\Controllers\AdmissionController@storeProspect')->name('apply-submit');

Route::any('newsletter', 'App\Http\Controllers\AdmissionController@newsletter')->name('newsletter');

Route::get('contact-us', 'App\Http\Controllers\AdmissionController@contactForm')->name('contact');


//User Routes
Route::get('admissions/verify', 'App\Http\Controllers\UserController@verifyEmail');
Route::get('login', 'App\Http\Controllers\UserController@loginFrm')->name('login');
Route::post('login', 'App\Http\Controllers\UserController@login');
Route::group(['middleware'=>'auth:web'], function(){
	Route::get('huni/profile', 'App\Http\Controllers\UserController@profile')->name('dashboard');
	Route::post('documents/upload', 'App\Http\Controllers\AdmissionController@uploadDoc')->name('doc-upload');
	Route::get('logout', 'App\Http\Controllers\UserController@logout')->name('logout');
});


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

//PUBLIC PATHS

Route::get('/', function () {
    if(Auth::check()){
        return redirect("/home");
    }else{
        return view('welcome');
    } 
});

Auth::routes();

//Route for Survey controller
Route::get('/surveys/{questionaire}-{slug}','SurveyController@show');
Route::post('/surveys/{questionaire}-{slug}','SurveyController@store');





//PROTECTED PATHS

// Route for Questionaire Controller
Route::get('/home', 'QuestionaireController@index')->name('home');
Route::get('/questionaire/create', 'QuestionaireController@create');
Route::post('/questionaire','QuestionaireController@store');
Route::get('/questionaire/{questionaire}','QuestionaireController@show');
Route::delete('/questionaire/{questionaire}','QuestionaireController@destroy');

// Routes for Question controller
Route::get('/questionaires/{questionaire}/questions/create','QuestionController@create');
Route::post('/questionaires/{questionaire}/questions','QuestionController@store');
Route::delete('/questionaires/{questionaire}/questions/{question}','QuestionController@destroy');


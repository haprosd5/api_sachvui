<?php

use Illuminate\Support\Facades\Route;
Use App\Categories;
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

// Route::get('/', function () {
//     return view('welcome');
// });



/** route thể loại truyện */ 
Route::get('cate', 'CategoriesController@getAllCategories');
Route::get('cate/id/{cate_id}/', 'CategoriesController@getCateId');
Route::get('cate/name/{title}/', 'CategoriesController@getCateName');
Route::get('cate/{cate_id}/all_stories', 'CategoriesController@getAllStoriesWithCateId');

/** route truyện */
Route::get('story', 'StoriesController@getAllStories');
Route::get('story/{cate_id}/{title}/', 'StoriesController@getStoriesWithCateName');
Route::get('story/{title}/', 'StoriesController@getStoriesWithName');

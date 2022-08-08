<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'MoviesController@show')->name('movies.show');

Route::get('/tv', 'TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');

Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'ActorsController@index');

Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');

Route::get('/movies/popular','MoviesController@popular')->name('movies.popular');

Route::get('/movies/nowplaying','MoviesController@nowPlaying')->name('movies.nowplaying');

Route::get('/movies/toprated','MoviesController@topRated')->name('movies.toprated');

Route::get('/movies/upcoming','MoviesController@upComing')->name('movies.upcoming');

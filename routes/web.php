<?php


Route::get('/', function () {
    return redirect()->route('index');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index', 'QuoteController@index')->middleware('auth')->name('index');
Route::get('quote', 'QuoteController@getQuote');
Route::get('quote/edit/{id?}', 'QuoteController@EditQuote')->name('quote.edit');
Route::get('quote/delete/{id?}', 'QuoteController@DeleteQuote')->name('quote.delete');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');


Route::resource('citations', 'CitationController');

Route::resource('tags', 'TagController');


Route::resource('films', 'FilmController');
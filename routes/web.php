<?php

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');
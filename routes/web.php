<?php

Route::get('/', 'PagesController@inicio');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('nosotros/{nombre?}','PagesController@nosotros')->name('nosotros');

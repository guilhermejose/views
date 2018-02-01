<?php



Route::get('/', function () {
    return view('doni');
});

Route::get('/cursos', 'CursosController@index');

?>

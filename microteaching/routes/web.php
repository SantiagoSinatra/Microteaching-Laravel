<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function(){
    return view('primeraRuta');
});

Route::get('/miSegundaRuta/{miNombre}/{miApellido}', function($miNombre, $miApellido){

    $variables = compact("miNombre","miApellido");

    return view('segundaRuta', $variables);
});

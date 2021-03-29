<?php

use Illuminate\Support\Facades\Route;

Route::get("/", "CrudController@index");

Route::get("/create", "CrudController@create");

Route::post("/create", "CrudController@cadastro");

Route::get("/excluir/{id}", "CrudController@excluir");

Route::get("/atualizar/{id}", "CrudController@atualizar");

Route::post("/atualizar/{id}", "CrudController@substituir");



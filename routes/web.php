<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CadernoController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PontoTuristicoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TipoNegocioController;
use App\Http\Controllers\TipoPontoTuristicoController;
use App\Models\Autor;
use App\Models\Caderno;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\TipoNegocio;
use App\Models\TipoPontoTuristico;
use Illuminate\Support\Facades\Route;



Route::get('/',[SiteController::class,'portal'])
->name('site.portal');

Route::get('/admin',[SiteController::class,'admin'])
->name('site.admin');

Route::get('/site/sobre',[SiteController::class,'sobre'])
->name('site.sobre');

Route::get('/site/contato',[SiteController::class,'contato'])
->name('site.contato');

Route::get('/site/cadernos',[SiteController::class,'cadernos'])
->name('site.cadernos');

Route::post('/site/noticias/pesquisa',[SiteController::class,'pesquisarNoticias'])
->name('site.pesquisarNoticias');

Route::get('/site/noticias/caderno/{id}',[SiteController::class,'noticiasPorCaderno'])
->name('site.noticiasporcaderno');


//GET: requisicao via URL
//POST: requisição via cabecalho da request
//UPDATE: requisição via URL e cabecalho
//DELETE: serve pra destruir o objeto
//DELETE OU SOFTDELETE: quando eu quero apenas ocultar eu uso
// o segundo, tem que configurar migration e model.

// Route::get('/cadernos',[CadernoController::class,'index'])
// ->name('cadernos.index');

// Route::get('/cadernos/create',[CadernoController::class,'create'])
// ->name('cadernos.create');

// Route::post('/cadernos',[CadernoController::class,'store'])
// ->name('cadernos.store');

// Route::get('/cadernos/{caderno}',[CadernoController::class,
// 'edit'])->name('cadernos.edit');

// Route::put('/cadernos/{caderno}',[CadernoController::class,
// 'update'])->name('cadernos.update');

// Route::delete('/cadernos/{caderno}',[CadernoController::class,
// 'destroy'])->name('cadernos.destroy');
//php artisan route:list+
// Resources

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('/cadernos', CadernoController::class);
    Route::resource('/autores', AutorController::class);
    Route::resource('/noticias', NoticiaController::class);
    Route::resource('/estados', EstadoController::class);
    Route::resource('/cidades', CidadeController::class);
    Route::resource('/enderecos', EnderecoController::class);
    Route::resource('/tipos-negocios', TipoNegocioController::class);
    Route::resource('/tipos-ponto', TipoPontoTuristicoController::class);
    Route::resource('/negocios', NegocioController::class);
    Route::resource('/pontos-turisticos', PontoTuristicoController::class);
});

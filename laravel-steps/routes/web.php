<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* rota principal */
Route::get('/', function () {
    return view('welcome');
})->name('principal');

/* rota com um ou mais parametros */

Route::get( 'teste/{id}/{person}', function ($id,$person){
    return $id . ' - ' . $person;
});

/* rota com ou sem parametros, sujestivo */
/* sem o interrogação no parametro ele nao encontra a pagina
já com o interrogação e colocando null como padrao no parametro ele deixa acessar  a página sem o parametro palavra
*/
Route::get( 'testando/{palavra?}' , function ($palavra = null){
    return $palavra;
});

/* agrupando rota que tem o mesmo inicio para melhor organização */
Route::prefix('usuario')->group( function(){
    Route::get('', function (){
        return 'rota usuario principal';
    });

    Route::get('/editar', function(){
        return 'usuario/editar porque esta agrupado dentro do grupo';
    })->name('editandoRota');

    /* tem como dar nome para as rotas, para a montagem das views será mais facil e melhor organizado
    por isso o mecanismo de name para cada rota, melhor do que ficar lembrando o caminho sempre
*/

} );

/*  REQUEST */

Route::get('request', function (Request $request ){
        /* traz todos os atributos da requisição, tem muita coisa que pode ser extraida atraves dessa injeção de dependencia  */
        $r = $request->whenHas('amigo',function($input){
            dd($input);
        });
        /* se nao tiver ele passa pela condição e imprime all nesse caso, todos os atributos do request */
        dd($r);
        return 'x';
});


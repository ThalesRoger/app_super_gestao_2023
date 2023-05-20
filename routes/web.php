<?php

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
/*
Route::get('/', function () {
    return 'olá, seja bem vindo ao curso' ;
});
*/


/*Rota com mais de um parâmetro:(nome - categoria - assunto - mensagem), nesse exemplo abaixo os parâmetros estão opcionais
Route::get('/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
            function(
             string $nomes = 'nome não informado',
             string $categorias = 'Categoria não informada', 
             string $assuntos = 'Assunto não informado', 
             string $mensagens = 'Mensagem não informada' ){
                echo "Estamos aqui: $nomes - $categorias - $assuntos - $mensagens"; 
} );


Route::get(
    '/contato/{nome}/{categoria_id}', 
            function(
             string $nomes = '100',
             int $categoria_id = 1 //1=informação
            ){
                echo "Estamos aqui: $nomes - $categoria_id "; 
} )->where('categoria_id', '[0+9]+')->where('nome', '[A-Za-z]+');
*/

/*
// abaixo rotas sem nomeação de nomes
Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal']);

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/login', function(){ return 'login'; });
*/

//abaixo Rotas nomeadas
Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class,'sobrenos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');

Route::get('/login', function(){ return 'login'; })->name('site.login');



//para agrupamento de rotas "prefix" e o método group espera uma rota com função de call back
//devido a agrupamento, na chamada na URL deverá iniciar com o prefixo definido, esse caso é "app"
Route::prefix('/app')->group(function(){

    Route::get('/cliente', function(){ return 'Clientes'; })->name('app.clinete');

    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'])->name('app.fornecedores');

    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');

});


/*
Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');


//abaixo duas formas de redirencionamento para rota1
Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');


//Redirecionamento: usar o "redirect" e entre ('rota que será direcionada', 'destino da rota direcionada')
Route::redirect('/rota2', '/rota1');



//Fallback - rota de contigência
Route::fallback(function() {
   echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial';
});
*/

//encaminhando paraâmetros da rota para o controlador


Route::get('/teste/{p1}/{p2}',  [\App\Http\Controllers\TesteController::class,'teste']  )->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial';

});
 


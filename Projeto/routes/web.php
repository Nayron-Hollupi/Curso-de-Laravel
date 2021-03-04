<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//criando rotas 
Route::get('/teste', function () {
    return view('teste');
});
//Rotas com nome + Redirect
/*
Route::get('/config', function(){
return redirect()->route('permissoes');

 //   return view('config');

});

Route::get('/config/info', function() {
     echo "Configurações INFO";
})->name('info');

Route::get('/config/permissoes', function() {
  echo "Configurações PERMISSÕES";
})->name('permissoes');


Route::get('/noticia/Algumacoisa', function(){
  return view('Algumacoisa');
});


//Route:: redirect('/', 'teste'); Para redirecionar para pagina inicial
Route::view('/teste', 'teste');

Route::get('/noticia/{Slug}', function($slug){
  echo "Titulo: Titulo qualquer";
});

Route::get('/noticia/{SLug}/comentario/{id}', function($Slug, $id){
   echo "Mostrando o comentario ".$id. "da notica ".$Slug;
});

//Expressão regular 

Route::get('/user/{name}', function($name){
  echo "Mostrando  nome do usúario  ".$name;
})->where('name', '[a-z]+');


Route::get('/user/{id}', function($id){
   echo "Mostrando ID do usúario  ".$id;
});




//Grupo de Rotas

Route::prefix('/config')->group(function(){
          
  Route::get('/', function(){
            return view('config');

  });

Route::get('info', function(){
   echo "Configuração INFO 2";
});

Route::get('permissoes', function(){
  echo "Configuração PERMISSOES 2";
});

});


//Fallback de Rotas (404)

Route::prefix('/config')->group(function(){
          
  Route::get('/', function(){
            return view('config');

  });

Route::get('info', function(){
   echo "Configuração INFO 2";
});

Route::get('permissoes', function(){
  echo "Configuração PERMISSOES 2";
});

});

Route::fallback(function(){
 return view ('404');
});

//Rotas + Controllers


Route::prefix('/config')->group(function(){
          
  Route::get('/',  [ConfigController::class,'index']);
  Route::get('info', [ConfigController::class,'info']);
  Route::get('permissoes', [ConfigController::class,'permissoes']);

});


Route::fallback(function(){
 return view ('404');
});
*/

//Controllers e Namespace
Route::prefix('/config')->group(function(){
          
  Route::get('/',  [ConfigController::class,'index']);
  Route::post('/',  [ConfigController::class,'index']);
  Route::get('info', [ConfigController::class,'info']);
  Route::get('permissoes', [ConfigController::class,'permissoes']);

});


Route::fallback(function(){
 return view ('404');
});

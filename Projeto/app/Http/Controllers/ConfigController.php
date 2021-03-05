<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
  
    public function index(Request $request){

        //Aula de Request
       // $url = $request->url();
       // $method = $request->method();

       //echo "METODO: ".$method;
        //echo "URL: ".$url;

// Pegando informação da URl
    //    $data =$request->all();
  // echo "MEu nome é ".$data['nome']. " e tenho ".$data['idade']. " anos";
         //print_r($data);


         //Dados que não aparece na URL

      //  $dados = $request->input('nome');
  
       // print_r($dados);


      /// $cidade = $request->query('cidade', 'São Paulo');

      // echo "Cidade: ".$cidade;
//all pega os dados de todo mundo
//input do corpo do request
//query pega os dados dados



/*Verificar se algo foi enviado

if($request->filled('estado')){
    echo "Tem estado";
}else{
    echo "Não Tem Estado!";
}
       
    

    //Verificar se  não tem o dado
 $estado = $request->input('estado', 'SP');

    echo "Estado: ".$estado;


$nome = $request->input('nome', 'Visitante');

echo "Nome: ".$nome;

//Quero pegar apenas
//$dados = $request->only(['nome', 'idade']);
//Pegar todos exeto
$dados = $request->except([ 'idade', '_token']);

 
print_r($dados);
*/





//Aula Blade é o sistema responsavel por controlar os view
//enviando dados do controler para o view



$nome ='Nayron';
$idade = 31;

$cidade = $request->input('cidade');

/*
$lista = [
    'farinha',
    'ovo',
    'chocolate',
    'fermento'
];

<h1>Configuração</h1>
@if(count($lista) > 0)
Lista do bolo:
    <ul>
        @foreach($lista as $item)
        <li>{{$item}}</li>
        @endforeach
    </ul> 
    @else
    Não a item na lista do bolo
    @endif
    <br>
    <ul>
        @forelse($lista as $item)
        <li>{{$item['qt']}}</li>
       @empty
       <li>Não há ingredientes</li>
   
           @endforelse
    </ul> 
    <br>*/

$lista = [
    ['nome'=>'farinha','qt'=>'2'],
    ['nome'=>'ovo','qt'=>'5'],
    ['nome'=>'chocolate','qt'=>'3'],
    ['nome'=>'fermento','qt'=>'2']
];  

$data = [
    'nome' => $nome,
    'idade' => $idade,
    'cidade' => $cidade,
    'lista' => $lista
];



//Definindo um template
    return view('admin.config', $data);
}










    public function info(){
        echo 'DEU CERTO INFO';
    }

    public function permissoes(){
         echo 'DEU CERTO PERMISSOES';
    }
}

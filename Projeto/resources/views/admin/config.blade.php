@extends('Template.admin')

@section('title', 'Configurações')

@section('content' )

@component('alert')

@slot('type')
Error........
@endslot

  Testando 123...
@endcomponent



    <br>
   
    <ul>
        @forelse($lista as $item)
        <li>{{$item['nome']}} - {{$item['qt']}}</li>
       @empty
       <li>Não há ingredientes</li>
   
           @endforelse
    </ul> 
    <br>
 
Meu nome é {{$nome}} e minha idade é {{$idade}} anos.<br>

<br>
@if($idade > 18 && $idade <= 60)
   Eu sou um adulto
@elseif($idade > 60 && $idade <= 90)
    Eu sou um idoso
@else 
Eu não sou maior de idade.
@endif

<br>
@isset($versao)
Existe uma versão e é a 

@endisset

<br>

@for($q=0;$q<10;$q++)
   O valor é {{$q}}<br>

@endfor


<!--Verificar se não existe ou está vazia --->
@empty($cidade)
Não existe uma cidade.

@endempty

<!---<form method="GET">--->

    <form method="POST">
        @csrf

    Nome:<br>
    <input type="text" name="nome" /><br>

    Idade: <br>
    <input type="text" name="idade"  /><br>

   Cidade: <br>
    <input type="text" name="cidade"  /><br>

    Estado: <br>
    <input type="text" name="estado"  /><br>
    <input type="submit" value="Enviar"/>

</form>
<a href="config/info">Informações </a> 
@endsection
@extends('Template.admin')

@section('title', 'Configurações')

@section('content' )
<h1>Configuração</h1>

Meu nome é {{$nome}} e minha idade é {{$idade}} anos.<br>


@if($idade > 18 && $idade <= 60)
   Eu sou um adulto
@elseif($idade > 60 && $idade <= 90)
    Eu sou um idoso
@else 
Eu não sou maior de idade.
@endif


@isset($versao)
Existe uma versão e é a 

@endisset

<br>
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
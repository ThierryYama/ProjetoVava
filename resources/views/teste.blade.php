<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
    {{-- Comentario =D --}}

    <!-- Oi -->

    <h1>Icones</h1>

    {{-- estrutura para escrever o php (não utilizar na view a declaração de var)--}}
    @php
        $clientes = array("Jose", "Pedro", "Thierry");
        $icones = array("/img/github.png", "/img/insta.png", "/img/x.png");

        $listaclientes = array(
        0 => array('nome'=> 'João', 'telefone'=>'9999-9999'),
        1 => array('nome'=> 'Maria', 'telefone'=>'2222-9999'),
        2 => array('nome'=> 'Pedro', 'telefone'=>'3333-9999'),
        3 => array('nome'=> 'Ana', 'telefone'=>'1111-9999'),    
        );

        $frutas = [];
        $i = 0;
    @endphp

    
    {{-- If para mostrar n° clientes cadastrados--}}
    @if (count($clientes) == 1)
        <p>Há 1 cliente cadastrado</p>
    @elseif(count($clientes) == 0)
        <p>Não há clientes cadastrados</p>    
    @else
        <p>Há {{count($clientes)}} clientes cadastrados</p>
    @endif

    {{-- Foreach para mostrar cada Cliente--}}
    @foreach ($clientes as $cliente)
        <p>Nome: {{$cliente}}</p>
    @endforeach
    

    {{-- Foreach usando o link de cada imagem--}}
    @foreach ($icones as $icone)
    {{$loop->index}}
    <img src="{{$icone}}" alt="">
    @endforeach


    {{-- Foreach array de arrays--}}
    @foreach ($listaclientes as $posicao => $valor)
        <p>{{$posicao}}: {{$valor['nome']}} - Telefone: {{$valor['telefone']}}</p>
    @endforeach

    {{-- Foreach que trata dos arrays vazios--}}
    @forelse($frutas as $posicao => $valor)
        <p>{{posicao}}: {{$valor['nome']}}</p>
    @empty
        <p>Não existe frutas cadastradas</p>
    @endforelse
    
    {{-- While usado para uma pilha (começa pelo ultimo e vai alocando na var $cliente) --}}
    @while ($cliente=array_pop($clientes))
        {{$cliente}}
    @endwhile    

     {{-- Puxando variaveis fora da view (pela route web.php) --}}
    @foreach ($clientest as $cliente)
        <br>{{$cliente}}
    @endforeach

    {{-- Mesma coisa que o anterior mas sem usar o "array_pop" --}}
    {{-- @while($i < count($clientes))
        {{$clientes[$i]}}
        @php
        $i++;
        @endphp
    @endwhile --}}

</body>
</html>

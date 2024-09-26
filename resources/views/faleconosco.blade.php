
@extends('layouts.main')
    
@section('title', 'Fale Conosco')
@section('css', '/css/faleconosco.css')
@section('js', '/js/welcome.js')
    

@section('main')

<main>
    <h1 class="fade">Fale Conosco</h1>
    <div class="container fade">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="mensagem">Digite a sua mensagem:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Mande a sua mensagem..."></textarea>
            <input type="submit">
        </div>
</main>

@endsection
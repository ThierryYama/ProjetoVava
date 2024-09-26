    @extends('layouts.main')

    @section('css', '/css/personagem.css')
    @section('main')

    <main>
    <div class="container-cards">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/jett.jpg" alt="Imagem de capa do card">
            <div class="card-body">
                <h2>Jett</h2>
                <p class="card-text">Representando a Coreia do Sul, sua terra natal, Jett tem um estilo de luta ágil e evasivo que permite que ela assuma riscos como ninguém. Ela corre em meio a qualquer confronto, cortando os inimigos antes mesmo que eles percebam quem ou o que os atingiu.</p>
            </div>
        </div>
    
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/phoenix.png" alt="Imagem de capa do card" >
            <div class="card-body">
                <h2>Phoenix</h2>
                <p class="card-text">"O Phoenix nasceu dessa ideia de sobrevivente, o último que poderia lutar contra todas as adversidades.</p>
            </div>
        </div>
    
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/sage.png" alt="Imagem de capa do card">
            <div class="card-body">
            <h2>Sage</h2>    
            <p class="card-text">Como uma verdadeira fortaleza chinesa, Sage traz segurança para si mesma e para a equipe aonde quer que vá. Capaz de reviver aliados e rechaçar investidas.</p>
            </div>
        </div>
    
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/img/yoru.png" alt="Imagem de capa do card">
            <div class="card-body">
                <h2>Yoru</h2>
                <p class="card-text">Yoru, nativo do Japão, abre fendas na realidade para infiltrar as linhas inimigas sem ser visto. Ele usa tanto artimanhas quanto táticas agressivas.</p>
            </div>
        </div>
    </div>
    </main>
    @endsection

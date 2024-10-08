<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="@yield('css')">
    <link rel="shortcut icon" type="imagex/svg" href="/img/LogoVava.svg">
    <script type="text/javascript" src="@yield('js')"></script>
    <title>@yield('title')</title>
</head>
<body>
   <header>
        <a href="/"><img src="/img/LogoVava.svg" alt="Logo" class="logoImg"></a>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/personagem">Personagens</a></li>
                <li><a href="/historia">História</a></li>
                <li><a href="/faleconosco">Fale Conosco</a>/li>
            </ul>
        </nav>
   </header>

   @yield('main')

    <footer>
        <span class="footer-span">Valorant©</span>
        <div class="container-footer">
            <a href="https://github.com/ThierryYama" target="_blank"><img src="/img/github.png" alt="Github Icone"></a>
            <a href="https://www.instagram.com/thierry_yamanouchi" target="_blank"><img src="/img/insta.png" alt="Instagram Icone"></a>
            <a href="x.com/Thierry_Yama"><img src="/img/x.png" alt="Twitter Icone"></a>
        </div>
   </footer>
</body>
</html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css" />
    <script src="js/Js.js"></script>
    <title>Translate - Home</title>
</head>

<body>

    <header id="header">
        <a href="index.php" id="logo">Translate</a>
        <nav id="nav">
            <ul id="menu">
                <li><a href="termos.php">Termos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle login" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Login
                    </a>
                    <ul class="dropdown-menu dropdown" aria-labelledby="">
                        <form action="validacao.php" class="login" method="post">
                            <Label>Usuário</Label>
                            <input type="text" name="txtlogin" id="txtlogin" class="login-text"
                                placeholder="Insira seu usuário...">
                            <Label>Senha</Label>
                            <input type="text" name="txtsenha" id="txtsenha" class="login-text"
                                placeholder="Sua Senha...">
                            <button class="login-button">Entrar</button>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main class="exibirPesquisaMain">

        <section class="pesquisa">
            <h2>Pesquise por mais termos</h2>
            <hr>
            <form>
                <input type="text" id="txtBusca" placeholder="Insira a sua busca..."/> 
                <!--Danylo guei, vagabundo, eu ia fazer o auto-complete-->
                <button id="pesquisar">&#xE71E</button>
            </form>
        </section>


        <div class="titulo-pesquisa">
            <h2>Resultado da pesquisa</h2>
            <h5>para: txtBusca</h5>
            <hr>
        </div>
        
        

        <section class="flex">
            <div class="cartao">
                <div class="cd-body">
                    <h5 class="cd-title">Nome do Termo</h5>
                    <p class="cd-text">Legal</p>
                    <hr>
                    <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                    <hr>
                </div>
            </div>
        </section>

        
        
    </main>


    <footer id="rodape-danylo">
        <div>
            <a href="index.html" id="logo">Translate</a>
            <p>Etec de Guaianazes</p>
        </div>
        <div>
            <p>© Copyright Translate.com 2021</p>
        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
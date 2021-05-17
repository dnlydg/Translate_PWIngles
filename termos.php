
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- bootstrap, se quiser ativar depois, ta bugando um pouco -->
    <link rel="stylesheet" href="css/Style.css" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
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
                            <input type="text" name="txtlogin" id="txtlogin" class="login-text" placeholder="Insira seu usuário...">
                            <Label>Senha</Label>
                            <input type="text" name="txtsenha" id="txtsenha" class="login-text" placeholder="Sua Senha...">
                            <button class="login-button">Entrar</button>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

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
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <hr>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <hr>
            </div>
        </div>
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <hr>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <hr>
            </div>
        </div>
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <hr>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <hr>
            </div>
        </div>
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
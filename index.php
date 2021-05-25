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

    <div class="section-top">
        <div class="content">
            <h1>Rapidez e praticidade</h1>
            <p>Busque termos em inglês mais rápido.</p>
            <form method="POST" action="termos.php">
                <input type="text" id="txtBusca" name="txtBusca" placeholder="Insira a sua busca..." />
                <button id="pesquisar" type="submit">&#xE71E</button>
            </form>
            <div class="list-group div-lista-resultados" id="lista">
                
            </div>

        </div>
    </div>



    <main class="container" id="main">

        <div class="termos-home">
        <h2>Alguns Termos Para Você</h2>
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
        </section>
        </div class='quem-somos'>

        <h2>Quem Somos</h2>
        <p>Somos uma startup brasileira pertencente a Etec de Guaianazes, e financiada pela Bifrost.</p>
        <h5>Início</h5>
        <p>Fundada em 2011, nossa empresa tem o objetivo de atender as pessoas que queriam pesquisar o
            significado de termos em inglês. Algo já existente no mercado, porém nós não queríamos seguir padrões, e
            sim, criar novos padrões. Nós queríamos fazer algo que as pessoas não somente entendessem o significado
            daquela palavra, mas que aquilo realmente fosse guardado na cabeça do usuário de alguma forma, nós estamos
            sempre atualizando a nossa forma com que nós se comunicamos com o nosso cliente para que esse resultado seja
            cada vez melhor, indo além de um simples dicionário.
        </p>
        <p>Nosso site entrou no ar oficialmente em 12 de agosto de 2011, tendo um crescimento lento, o que já era
            esperado. Em 2012, a Paralax investiu na nossa empresa, com que fez com que ela tivesse um alcance ainda
            maior, e foi quando vimos nossa proposta realmente ganhando forma. Em 2015 a finada Aviaras também investiu
            em nós.</p>
        <h5>Presente e futuro</h5>
        <p>Atualmente nós estamos reformulando totalmente o nosso site, tanto no back quanto no front, recentemente
            tivemos um grande pico de acesso por causa da pandemia, e nós queremos iniciar uma nova era da nossa
            empresa, a partir desses 10 anos de história que nó já temos. Nossa promessa é aprimorar ainda mais a
            acessibilidade ao inglês, e em um futuro próximo, adicionar outras linguas, inclusive o próprio português.
        </p>


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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#txtBusca").keyup(function(){
                var procurarTexto = $(this).val();
                if(procurarTexto != ''){
                    $.ajax({
                        url: 'procurar-termo.php',
                        method: 'POST',
                        data: {query:procurarTexto},
                        success:function(resposta){
                            $("#lista").html(resposta);
                        }
                    });
                }
                else{
                    $("#lista").html('');
                } 
            });
            $(document).on('click', '#link-lista', function(){
                $("txtBusca").val($(this).text());
                $("#lista").html('');
            });
        });
    </script>

</body>

</html>
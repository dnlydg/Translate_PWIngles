
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- bootstrap, se quiser ativar depois, ta bugando um pouco -->
    <link rel="stylesheet" href="css/Style.css" />
    <script src="js/Js.js"></script>
    <title>Translate - Home</title>
</head>

<body>
    <?php
        include_once('global.php');
        include_once('classes/Termo.php');
        include_once('classes/Conexao.php');
        try{
            $termo = new Termo();
            $listatermos = $termo->listar();
        }catch(Exception $e){
            echo 'Erro: '.$e->getMessage();
        }
    ?>

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
            <?php
                $i = 0;
                foreach ($listatermos as $linha){
                    $i++;
            ?>
            <div class="cartao">
                <div id="bodyModal" class="cd-body">
                    <h5 class="cd-title">Termo</h5>
                    <p class="cd-text"><?php echo $linha['nomeTermo'] ?></p>
                    <h5 class="cd-title">Tradução</h5>
                    <p class="cd-text"><?php echo $linha['descTermo'] ?></p>        
                </div>
            </div>
            <?php
                }
            ?>
        </section>

    

    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>

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
        if(isset($_POST['txtBusca'])){
            $termoPesquisado = $_POST['txtBusca'];
        }else{ 
            $termoPesquisado = "";
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
            <div class="cartao" <?php echo 'id=cartao'.$i ?>>
                <div id="bodyModal" class="cd-body">
                    <h5 class="cd-title">Termo</h5>
                    <input type="hidden" name="txtPegarID" id="txtPegarID" value="<?php echo @$_GET['idTermo']; ?>">
                    <p <?php echo 'id=nomeTermo'.$i ?> class="cd-text"><?php echo $linha['nomeTermo'] ?></p>
                    <script type="text/javascript">
                        var i = "<?php echo $i ?>";
                        var termoPesquisado = "<?php echo $termoPesquisado;?>";
                        var termoLinha = "<?php echo $linha['nomeTermo'];?>";

                        if(termoPesquisado == termoLinha){
                            document.getElementById('cartao'+i).style.borderStyle = "solid";
                            document.getElementById('cartao'+i).style.borderColor = "#f38900";
                            document.getElementById('nomeTermo'+i).style.color = "#f38900";
                            document.getElementById('nomeTermo'+i).focus();
                        }
                    </script>
                    <h5 class="cd-title">Tradução</h5>
                    <p class="cd-text"><?php echo $linha['descTermo'] ?></p>        
                </div>
            </div>
            <?php
                }
            ?>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>
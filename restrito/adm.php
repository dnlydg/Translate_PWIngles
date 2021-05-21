<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- bootstrap, se quiser ativar depois, ta bugando um pouco -->
    <link rel="stylesheet" href="../css/Style.css" />
    <title>Translate - Home</title>
</head>

<body>
    <?php
        include_once('../global.php');
        include_once('sentinela.php');
        include_once('../classes/Termo.php');
        include_once('../classes/Conexao.php');
        try{
            $termo = new Termo();
            $listatermos = $termo->listar();
        }catch(Exception $e){
            echo 'Erro: '.$e->getMessage();
        }
    ?>

        <header id="header">
            <a href="../index.php" id="logo">Translate</a>
            <nav id="nav">
                <ul id="menu">
                    <li><a href="termos.php">Termos</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle login" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Logout
                    </a>
                        <ul class="dropdown-menu dropdown" aria-labelledby="">
                            <form action="../logout.php" class="login">
                                <Label>Usuário:</Label>
                                <Label>
                                <p>adm</p>
                            </Label>
                                <Label>Senha:</Label>
                                <Label>
                                <p>***</p>
                            </Label>
                                <button class="login-button">Sair</button>
                            </form>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="grid">
            <div class="card">
                <div class="card-body">

                    <a href="#" onClick="openModalAdd()" style="margin-left:8%;">Adicionar Termo +</a>

                </div>
            </div>
        </section>

        <section>
            <form method="POST" action="../alterar-termo.php" class="modal-form">
                <input type="hidden" name="txtPegarID" id="txtPegarID" value="<?php echo @$_GET['idTermo']; ?>">
                <label for="txtNome">Nome</label>
                <input type="text" name="txtNome" id="txtNome" value="<?php echo @$_GET['nomeTermo']; ?>">
                <label for="txtDesc">Descrição</label>
                <textarea name="txtDesc" id="txtDesc" cols="30" rows="4"><?php echo @$_GET['descTermo']; ?></textarea>
                <button type="submit" value="AlterarTermo" id="alterar" name="alterar">Validar</button>
            </form>
        </section>

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
                    <button type="button" class="btn btn-primary">
                        <?php
                            echo "<a href='?idTermo={$linha['idTermo']}&nomeTermo={$linha['nomeTermo']}&descTermo={$linha['descTermo']}'>";
                                echo "Alterar";
                            echo "</a>";
                        ?>
                        
                    </button>
                    <!--
                    <a href="#" class="btn btn-primary" onClick="openModal()">Alterar</a>
                    -->
                    <?php 
                        echo "<a href='../excluir-termo.php?idTermo=$linha[idTermo]' class='btn btn-danger'>";
                            echo "Excluir";
                        echo "</a>"
                    ?>
                </div>
            </div>
            <?php
                }
            ?>
        </section>
            
        <div class="modal fade" id="modalAlterar" role="dialog" aria-labelledby="tituloModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tituloModal">Teste testado</h5>
                        <span class="close" aria-hidden="true" data-dismiss="modal">&times;</span>
                    </div>
                    <div class="modal-body">
                        <form action="get" class="modal-form">
                            <label for="txtNome">Nome</label>
                            <input type="text" name="nome" id="txtNome">
                            <label for="txtDesc">Descrição</label>
                            <textarea name="Descricao" id="txtDesc" cols="30" rows="4"></textarea>
                            <button type="submit" value="AlterarTermo" id="alterar" name="alterar">Validar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div id="modalAlterar" class="modal" id="modalAlterar">
            <div class="modal-content">
                <div class="modal-title">
                    <h1>Alterar</h1>
                    <span class="close">&times;</span>
                </div>
                <form action="get" class="modal-form">
                    <label for="txtNome">Nome</label>
                    <input type="text" name="nome" id="txtNome">
                    <label for="txtDesc">Descrição</label>
                    <textarea name="Descricao" id="txtDesc" cols="30" rows="4"></textarea>
                    <button>Validar</button>
                </form>
            </div>
        </div>
        -->


        <div id="modalAdicionar" class="modal">
            <div class="modal-content">
                <div class="modal-title">
                    <h1>Adicionar</h1>
                    <span class="close">&times;</span>
                </div>
                <form method="POST" action="../inserir-termo.php" class="modal-form" name="InserirTermo">
                    <label for="txtNome">Nome</label>
                    <input type="text" name="txtNome" id="txtNome">
                    <label for="txtTermo">Descrição</label>
                    <textarea name="txtTermo" id="txtTermo" cols="30" rows="4"></textarea>
                    <button type="submit" value="InserirTermo" id="validar" name="validar">Validar</button>
                </form>
            </div>
        </div>

        <script src="../js/modal.js"></script>
        
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>
        
                
        
        </script>

</body>

</html>
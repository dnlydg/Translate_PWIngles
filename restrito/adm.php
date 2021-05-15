<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- bootstrap, se quiser ativar depois, ta bugando um pouco -->
    <link rel="stylesheet" href="../css/Style.css" />
    <title>Translate - Home</title>
</head>

<body>
    <?php
            include_once("sentinela.php");
        ?>

    <header id="header">
        <a href="index.php" id="logo">Translate</a>
        <nav id="nav">
            <ul id="menu">
                <li><a href="termos.php">Termos</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle login" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
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

    <section class="flex">
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <h5 class="cd-title">Desc:</h5>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <a href="#" class="btn btn-primary" onClick="openModal()">Alterar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
            </div>
        </div>
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <h5 class="cd-title">Desc:</h5>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <a href="#" class="btn btn-primary" onClick="openModal()">Alterar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
            </div>
        </div>
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <h5 class="cd-title">Desc:</h5>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <a href="#" class="btn btn-primary" onClick="openModal()">Alterar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
            </div>
        </div>
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <h5 class="cd-title">Desc:</h5>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <a href="#" class="btn btn-primary" onClick="openModal()">Alterar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
            </div>
        </div>
        <div class="cartao">
            <div class="cd-body">
                <h5 class="cd-title">Nome do Termo</h5>
                <p class="cd-text">Legal</p>
                <h5 class="cd-title">Desc:</h5>
                <p class="cd-text">Legal sasa sasas asasa sasasa </p>
                <a href="#" class="btn btn-primary" onClick="openModal()">Alterar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
            </div>
        </div>
    </section>

    <div id="modalAlterar" class="modal">
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

    <div id="modalAdicionar" class="modal">
        <div class="modal-content">
            <div class="modal-title">
                <h1>Adicionar</h1>
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

    <script src="../js/modal.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>
</body>

</html>
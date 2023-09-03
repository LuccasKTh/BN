<nav class="navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">BN</a>

        <input type="text" name="textname" id="textname" onchange="textname()" class="form-control" value="<?= $textname ?>" placeholder="Nome do arquivo" style="display: none;">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"><span class="navbar-toggler-icon"></span></button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="edicao.php">Nova Nota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acao.php?acao=logoff">Logoff</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
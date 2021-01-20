<?php include "cabecalho.php" ?>

<body> 
    <nav class="nav-extended teal light-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="sass.html">Galeria</a></li>
                <li><a href="badges.html">Cadastrar</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
        <div class="nav-header center">
            <h1>Great Movies </h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filmes</span>
                    <!-- input Titulo -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="título" type="text" class="validade" require>
                            <label for="título">Título do Filme</label>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            <!-- Sinopse -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- nota -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="título" type="number" step=".1" min=0 max=10 class="validade" require>
                            <label for="título">Nota</label>
                        </div>
                    </div>
                    <!-- input capa -->
                    <div class="file-field input-field">
                        <div class="btn teal lighten-3 ">
                            <span>cartaz do Filme</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
                    <a href="#" class="waves-effect waves-light btn ">Confirmar</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
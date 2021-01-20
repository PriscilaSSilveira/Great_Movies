<?php include "cabecalho.php" ?>
<?php
$filme1 = [
    "titulo" => "Vingadores: Ultimato",
    "nota" => 8.6,
    "sinopse" => "Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.",
    "poster" => "https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
];


$filme2 = [
    "titulo" => "Mulher Maravilha",
    "nota" => 8.6,
    "sinopse" => " Em 1984, Diana Prince entra em conflito com dois inimigos formidáveis, Maxwell Lord e a Mulher-Leopardo, enquanto reencontra misteriosamente com seu antigo interesse amoroso Steve Trevor.",
    "poster" => "https://www.themoviedb.org/t/p/w300/qDA95ebiy3W3m8hTRB3xZNZVVBM.jpg"
];
$filmes = [$filme1, $filme2]

?>

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
        <?php
        foreach ($filmes as $filme) :
            // for ($i = 0; $i < count($filmes); $i++) {
            // $filme = $filmes[$i];
        ?>
            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"] ?>">

                        <a class="btn-floating halfway-fab waves-effect waves-light red">
                            <i class="material-icons">favorite_border</i>
                        </a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i><?= $filme["nota"] ?>
                        </p>
                        <span class="card-title"><?= $filme["titulo"] ?></span>
                        <p><?= $filme["sinopse"] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</body>

</html>
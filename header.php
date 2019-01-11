<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <?php $home = get_template_directory_uri(); ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$home ?>/style.css">

    <title>Tema Kadima</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.html">
        <img src="<?=$home ?>/img/icon.png" width="64" height="64" alt="Logo da Kadima">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarTogglerDemo02"><!-- AJUSTAR ALINHAMENTO EM XS -->
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Procurar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
        </form>
    </div>
</nav>
<header class="header">
    <div class="container-fluid"><!-- IMG GRATUITA -->
        <h1><!--<img src="img/seta.png" height="12%"/>-->Kadima Jr </h1><h2>Seu negócio nas alturas!</h2>
    </div>
</header>
<nav class="navemail"><!-- AJUSTAR POSICIONAMENTO EM XS -->
    <div class="container">
        <h3>Se cadastre e fique por dentro das novidades!</h3>
        <div class="input-group mb-3">
            <input type="text" class="capture-email-field form-control" placeholder="E-mail" aria-label="E-mail do usuario" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="capture-email-button btn btn-secondary" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</nav>
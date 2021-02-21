<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="<?= "../" .asset("css/error.css")?>">
    <link rel=" icon" href="<?= "../" .asset('icons/cancelar.svg')?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="author" content="Paulo Henrique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzyCrazy : Erro <?=$error?></title>
</head>
<body>
<main>
    <strong>Erro <?=$error?></strong>
    <p>O Erro Dado foi <?=$error?>,Pesquise Nos Números de Requisições HTTP Para Saber Qual Significado do Erro.</p>
    <a href="<?=$router->route('s.home')?>">Home</a>
    <img src="<?= "../" .asset('images/erro-de-http.jpg')?>" alt="imagem indicando erro HTTP" title="imagem indicando erro HTTP">
</main>

<script src="<?= "../" .asset('js/jquery-3.5.1.min.js')?>"></script>
<script src="<?= "../" .asset('js/erro.js')?>"></script>
</body>
</html>
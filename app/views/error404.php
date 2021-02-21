<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="shortcut icon" href="<?="../".asset('icons/erro.svg')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?="../".asset('css/error404.css')?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzyCrazy : Erro 404</title>
</head>
<body>
    <main>
       <h1>Erro 404</h1>
       <p>Desculpe Mas a url Digitada é inválida e não Existe,Busque por uma url Existente.</p>
       <a href="<?=$router->route('s.home')?>">Home</a>
       <img src="<?="../".asset('images/404.png')?>" alt="imagem informando erro 404" title="imagem informando erro 404">

    </main>
   
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="<?=asset("../assets/css/badPerformance.css")?>">
  <link rel="icon" href="<?=asset("../assets/icons/queixa.svg")?>" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="author" content="Paulo Henrique">
  <meta name="robots" content="noindex">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuizzyCrazy:Pontuação Ruim</title>
</head>
<body>
 <main class="main flex-center">
   <h1 class="main__title">Pontuação Ruim &#x1F613</h1>
    <img src="<?=asset("../assets/images/itachi.png")?>" class="main__image" alt="imagem dizendo voçẽ é fraco">
     <p class="main__text">Tirando a brincadeira sua pontuação foi <strong><?=$note?></strong> ,não acredito que virou um guerreiro
     de classe baixa,tente de novo porque
 seu potencial é de classe alta. </p>
 <a href="<?=$router->route("s.home")?>" class="main__link link-body">Home</a>
 </main>
</body>
</html>
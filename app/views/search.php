<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="icon" href="<?=asset('/icons/motor-de-otimizacao-de-busca.svg')?>" type="image/x-icon">
  <link rel="stylesheet" href="<?=asset('/css/search.css')?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuizzyCrazy:Procurando Quiz</title>
</head>
<body>

  <main class="content">
  <?php if($quiz):?>
    <h1 class="content__title u-color-red">QuizzyCrazy:<?=$quiz->nome_quiz?></h1>
    <h2 class="content__title u-color-green"><?=$quiz->nome_autor?></h2>
    <p class="content__description"><?=$quiz->descricao?></p>
    <img class="content__image" src="<?=$quiz->image?>" alt="">
    <article class="content__article"><a href="<?=$router->route("s.play",["code"=>$quiz->code])?>" class="content__link">Jogar</a></article>
  
  </main>
   <?php else : ?>
  <section class="nocontent">
    <p class="nocontent_text">Desculpe,não foi possivel encontrar o quiz.</p>
    <img class="nocontent__image" src="<?=asset('/images/not-found.jpg')?>" alt="">
  </section>
  <?php endif;?>
</body>
</html>
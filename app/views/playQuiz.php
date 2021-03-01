<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="<?=asset('css/playQuiz.css')?>">
  <link rel=" icon" href="<?=asset('icons/questionario(2).svg')?>" type="image/x-icon">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Paulo Henrique">
  <meta name="robots" content="index">
  <meta name="description" content="{Description}">
   <meta property="og:locale" content="pt-BR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="QuizzyCrazy">
    <meta property="og:title" content="QuizzyCrazy : {QuizName}">
    <meta property="og:description" content="{Description}">
    <meta property="og:url" content="">
    <meta propery="og:image" content="">
    <meta itemprop="name" content="QuizzyCrazy">
    <meta itemprop="description" content="{Description}">
    <meta itemprop="image" content="">
    <meta name="twitter:title" content="QuizzyCrazy : {QuizName}">
    <meta name="twitter:description" content={Description}>
   <meta name="twitter:url" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> QuizzyCrazy:<?=$quiz->nome_quiz?></title>
</head>
<body>
  <header class="c-body c-header">
   <h1 class="c-title slide-in-top">QuizzyCrazy:<?=$quiz->nome_quiz?></h1>
  </header>

  <section class=" l-body  js-main" >
    <h2 class="l-title"> Aproveite o Quiz:<?=$quiz->nome_quiz?> feito por <?=$quiz->nome_autor?>.</h2>
    <img class="u-max-width-100" src="<?=asset('images/jigsaw-phishing-quiz_sm.jpg')?>" alt="imagem que diz quiz time ">

  </section>

  <main class="quiz">
    <h3 class="quiz__title u-color-brown"><?=$quiz->nome_quiz?></h3>
    <h4 class="quiz__title"><?=$quiz->nome_autor?></h4>
    <p class="quiz__title quiz__description"><?=$quiz->descricao?></p>
    <img class=" u-max-width-100 u-clip-path-circle" src="<?=asset('images/attack-on-titan-season-3-characters-poster.jpg"')?>" alt="imagem do Quiz {quizname}"  >
   <form action="" method="post" class="quiz__form">
    <p class="quiz__question">Pergunta</p>
    <label for="" class="quiz__answer">
     resposta
    </label>
    <input type="radio" name="" id="">
    <button type="submit" class="quiz__button pulsate-bck button-body">Ver Pontuação</button>

   </form>
  </main>


  <footer class="c-body c-footer">
    <h5 class="c-title c-footer-title">&copy;2020-Direitos Resevardos Ao QuizzyCrazy.</h5>
  </footer>
  <audio src="../assets/audios/bensound-happyrock.mp3" autoplay></audio>
  
  <script src="../assets/js/jquery-3.5.1.min.js">
  </script>
  <script src="../assets/js/playQuiz.js">

  </script>
</body>
</html>
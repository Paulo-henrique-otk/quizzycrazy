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
    <p class="quiz__question"><?=$quiz->pergunta1?></p>
    <label for="resposta1" class="quiz__answer"><?=$quiz->resposta1?></label>
    <input type="radio" name="resposta1" id="resposta1" value="<?=$quiz->resposta1?>">
    <label for="resposta2" class="quiz__answer"><?=$quiz->resposta2?></label>
    <input type="radio" name="resposta1" id="resposta2" value="<?=$quiz->resposta2?>">
    <label for="resposta3" class="quiz__answer"><?=$quiz->resposta3?></label>
    <input type="radio" id="resposta3" name="resposta1" value="<?=$quiz->resposta3?>">
    <label for="resposta4" class="quiz__answer"><?=$quiz->resposta4?></label>
    <input type="radio" id="resposta4" name="resposta1" value="<?=$quiz->resposta4?>">
    <label for="resposta5" class="quiz__answer"><?=$quiz->resposta5?></label>
    <input type="radio" id="resposta5" name="resposta1" value="<?=$quiz->resposta5?>">

    <p class="quiz__question"><?=$quiz->pergunta2?></p>
    <label for="resposta6" class="quiz__answer"><?=$quiz->resposta6?></label>
    <input type="radio" id="resposta6" name="resposta2" value="<?=$quiz->resposta6?>">
    <label for="resposta7" class="quiz__answer"><?=$quiz->resposta7?></label>
    <input type="radio" id="resposta7" name="resposta2" value="<?=$quiz->resposta8?>">
    <label for="resposta8" class="quiz__answer"><?=$quiz->resposta1?></label>
    <input type="radio" id="resposta8" name="resposta2" value="<?=$quiz->resposta8?>">
    <label for="resposta9" class="quiz__answer"><?=$quiz->resposta9?></label>
    <input type="radio" id="resposta9" name="resposta2" value="<?=$quiz->resposta9?>">
    <label for="resposta10" class="quiz__answer"><?=$quiz->resposta10?></label>
    <input type="radio" id="resposta10" name="resposta2" value="<?=$quiz->resposta10?>">

    <p class="quiz__question"><?=$quiz->pergunta3?></p>
    <label for="resposta11" class="quiz__answer"><?=$quiz->resposta11?></label>
    <input type="radio" id="resposta11" name="resposta3" value="<?=$quiz->resposta11?>">
    <label for="resposta12" class="quiz__answer"><?=$quiz->resposta12?></label>
    <input type="radio" id="resposta12" name="resposta3" value="<?=$quiz->resposta12?>">
    <label for="resposta13" class="quiz__answer"><?=$quiz->resposta13?></label>
    <input type="radio" id="resposta13" name="resposta3" value="<?=$quiz->resposta13?>">
    <label for="resposta14" class="quiz__answer"><?=$quiz->resposta14?></label>
    <input type="radio" id="resposta14" name="resposta3" value="<?=$quiz->resposta14?>">
    <label for="resposta15" class="quiz__answer"><?=$quiz->resposta15?></label>
    <input type="radio" id="resposta15" name="resposta3" value="<?=$quiz->resposta15?>">
    


    <p class="quiz__question"><?=$quiz->pergunta4?></p>   
    <label for="resposta16" class="quiz__answer"><?=$quiz->resposta16?></label>
    <input type="radio" id="resposta16" name="resposta4" value="<?=$quiz->resposta16?>"> 
    <label for="resposta17" class="quiz__answer"><?=$quiz->resposta17?></label>
    <input type="radio" id="resposta17" name="resposta4" value="<?=$quiz->resposta17?>">
    <label for="resposta18" class="quiz__answer"><?=$quiz->resposta18?></label>
    <input type="radio" id="resposta18" name="resposta4" value="<?=$quiz->resposta18?>">
    <label for="resposta19" class="quiz__answer"><?=$quiz->resposta19?></label>
    <input type="radio" id="resposta19" name="resposta4" value="<?=$quiz->resposta19?>">
    <label for="resposta20" class="quiz__answer"><?=$quiz->resposta20?></label>
    <input type="radio" id="resposta20" name="resposta4" value="<?=$quiz->resposta20?>">

    <p class="quiz__question"><?=$quiz->pergunta5?></p> 
    <label for="resposta21" class="quiz__answer"><?=$quiz->resposta21?></label>
    <input type="radio" id="resposta21" name="resposta5" value="<?=$quiz->resposta21?>">
     <label for="resposta22" class="quiz__answer"><?=$quiz->resposta22?></label>
    <input type="radio" id="resposta22" name="resposta5" value="<?=$quiz->resposta22?>">
     <label for="resposta23" class="quiz__answer"><?=$quiz->resposta23?></label>
    <input type="radio" id="resposta23" name="resposta5" value="<?=$quiz->resposta23?>">
     <label for="resposta24" class="quiz__answer"><?=$quiz->resposta24?></label>
    <input type="radio" id="resposta24" name="resposta5" value="<?=$quiz->resposta24?>">
     <label for="resposta25" class="quiz__answer"><?=$quiz->resposta25?></label>
    <input type="radio" id="resposta25" name="resposta5" value="<?=$quiz->resposta25?>">
    <button type="submit" class="quiz__button pulsate-bck button-body">Ver Pontuação</button>

   </form>
  </main>


  <footer class="c-body c-footer">
    <h5 class="c-title c-footer-title">&copy;2020-Direitos Resevardos Ao QuizzyCrazy.</h5>
  </footer>
 
  
  <script src="../assets/js/jquery-3.5.1.min.js">
  </script>
  <script src="../assets/js/playQuiz.js">

  </script>
</body>
</html>
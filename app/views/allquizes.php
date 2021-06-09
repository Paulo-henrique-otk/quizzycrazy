<!DOCTYPE html>
 <html lang="pt-BR">
<head>
    <link rel="canonical" href="<?=URL?>">
    <link rel="stylesheet" href="<?=asset("css/allquizes.css")?>" >
    <link rel="icon" href="<?=asset("icons/questionario(4).svg")?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="author" content="Paulo Henrique">
    <meta name="creator" content="Paulo Henrique">
    <meta name="description" content="Página Ver Todos Do QuizzyCrazy,aqui Voçê Verá Todos os Quizes Disponíveis,Venha Jogar um Quiz Agora Mesmo.">
    <meta name="robots" content="index,follow"> 
    <meta property="og:locale" content="pt-BR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="QuizzyCrazy">
    <meta property="og:title" content="QuizzyCrazy:Todos os Quizes">
    <meta property="og:description" content="Página Ver Todos Do QuizzyCrazy,aqui Voçê Verá Todos os Quizes Disponíveis,Venha Jogar um Quiz Agora Mesmo.">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?=asset("images/QUIZ.jpg")?>">
    <meta itemprop="name" content="QuizzyCrazy">
    <meta itemprop="description" content="Página Ver Todos Do QuizzyCrazy,aqui Voçê Verá Todos os Quizes Disponíveis,Venha Jogar um Quiz Agora Mesmo.">
    <meta itemprop="image" content="<?=asset("images/QUIZ.jpg")?>">
    <meta name="twitter:title" content="QuizzyCrazy : Plataforma de Quizes">
    <meta name="twitter:description" content="Página Ver Todos Do QuizzyCrazy,aqui Voçê Verá Todos os Quizes Disponíveis,Venha Jogar um Quiz Agora Mesmo.">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="<?=asset("images/QUIZ.jpg")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzyCrazy : Todos os Quizes </title>
</head>
<body>
    <header >
        <nav class="link">
           <a href="<?=$router->route('s.home')?>">Home</a>
        </nav>
    </header>
    <main>
       <h1>Todos os Quizes Do QuizzyCrazy</h1>
       <p>Olá,Seja Bem Vindo a Página Ver Todos Do QuizzyCrazy,aqui Voçê Verá Todos os Quizes Disponíveis. </p>
       <?php if($quizes): 
        foreach($quizes as $quiz):
        ?>
       <div class="Quiz">
       <img src="<?=asset('images/itachi.png')?>" alt="Imagem do Quiz :<?=$quiz->nome_quiz?>}" title=" <?=$quiz->nome_quiz?>">
       <h2><?=$quiz->nome_quiz?></h2>
       <h3><?=$quiz->nome_autor?></h3>
       <p><?=$quiz->descricao?></p>
       <a href="<?=$router->route('s.play', ["code"=>$quiz->code])?>">Jogar</a>
       </div>
     <?php
    endforeach;
    else: ?>
       </div>
       <div class="Quiz">
        <img src="<?= asset("images/triste-emo.jpg")?>" alt="Imagem do emoji triste" title="Imagem do emoji triste">
        <p>Sem Quizes por Enquanto,Por Favor Considere Criar Um.</p>
        <a href="<?=$router->route('s.create')?>">Criar</a>
       </div>
       <?php endif; ?>
   </main> 
<footer>
    <h4>&copy;<?=date("Y")?>-Direitos Reservados Ao QuizzyCrazy</h4>
</footer>
 <script src="<?=asset('js/jquery-3.5.1.min.js')?>"></script> 
 <script src="<?=asset('js/allquizes.js')?>"> </script> 
</body>
</html>
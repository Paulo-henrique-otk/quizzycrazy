<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="canonical" href="<?=URL?>">
    <link rel="stylesheet" href="<?= asset("css/home.css")?>">
    <link rel="icon" href="<?= asset("icons/questionario.svg")?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="author" content="Paulo Henrique">
    <meta name="creator" content="Paulo Henrique">
    <meta name="description" content="QuizzyCrazy é uma Plataforma de Quizes em que Voçê Não Precisa se Cadastrar para criar Um Quiz e nem Jogar Também,Venha e Ajude-nos a Crescer e ter Mais Conteúdo.">
    <meta name="robots" content="index,follow">
    <meta property="og:locale" content="pt-BR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="QuizzyCrazy">
    <meta property="og:title" content="QuizzyCrazy : Plataforma de Quizes">
    <meta property="og:description" content="QuizzyCrazy é uma Plataforma de Quizes em que Voçê Não Precisa se Cadastrar para criar Um Quiz.">
    <meta property="og:url" content="">
    <meta propery="og:image" content="<?= asset("images/titulo_quiz.png")?>">
    <meta itemprop="name" content="QuizzyCrazy">
    <meta itemprop="description" content="QuizzyCrazy é uma Plataforma de Quizes em que Voçê Não Precisa se Cadastrar para criar Um Quiz.">
    <meta itemprop="image" content="<?= asset("images/titulo_quiz.png")?>">
    <meta name="twitter:title" content="QuizzyCrazy : Plataforma de Quizes">
    <meta name="twitter:description" content="QuizzyCrazy é uma Plataforma de Quizes em que Voçê Não Precisa se Cadastrar para criar Um Quiz.">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="<?= asset("images/titulo_quiz.png")?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzyCrazy : Plataforma de Quizes</title>
</head>

<body>


    <header>

        <nav>
            <div class="menu">
                <img src="<?= asset("images/titulo_quiz.png")?>" alt="Imagem do Topo do QuizzyCrazy" title="Imagem do Topo do QuizzyCrazy">

                <form action="<?=$router->route('q.search.post')?>" method="post" >
                
                    <input type="search" name="busca" list="quiz" placeholder="Busque um Quiz ">
                    <datalist id="quiz">
                        <?php if($quizes):
                          foreach ($quizes as $quiz) :
                          ?>
                        <option value="<?=$quiz->nome_quiz?>"><?=$quiz->nome_quiz?></option>
                       <?php 
                       endforeach; 
                       else :
                        ?>
                        <option value=""></option>
                        <?php
                       endif;?>
                    </datalist>
                    <button type="submit">Buscar</button>


                </form>


                <a href="<?=$router->route("s.create")?>">Criar Quiz</a>

            </div>
            

       </nav>
    </header>
   
    <main>
        <h1 class="text-shadow-pop-bottom ">QuizzyCrazy, A Plataforma de Quizes Super Divertida e Interessante.</h1>
        <h2 class="text-shadow-pop-bottom ">Venha Jogar os Quizes do QuizzyCrazy e se divirta.</h2>
        <h3 class="text-shadow-pop-bottom ">Descubra Varios Quizes Interessantes aqui no QuizzyCrazy.</h3>
        <p>
            Olá,Seja Bem Vindo ao QuizzyCrazy,Nessa Plataforma Você Pode Jogar Ou Mesmo Criar Um Quiz,Seja de sua Preferência,Voçê Apenas Escolhe o Nome Do Quiz,Escreve uma pequena Descrição do Quiz,Nome do Autor Do Quiz(Pode Ser Seu Nome ou Outro) e as Perguntas, Jogue Tambem Já que Somos Uma Plataforma
            Voçê é Bem Vindo A Fazer O Que Mais Interessar Para Voçê ,e Se Não Tiver Nenhum Quiz Ainda Por Favor Considere Criar Um,Muito Obrigado Por Visitar Este Site,Tchau.
        </p>

        <img src="<?= asset("images/shutterstock_1214717467-900x506-1 .jpg")?>" alt="Imagem principal do QuizzyCrazy" title="Imagem principal do QuizzyCrazy">

        <h4>Confira Aqui Embaixo Os Quizes Novos e Criados Recentemente No QuizzyCrazy: </h4>
        <?php  if($quizes):
        foreach ($quizes as $quiz) :
        ?>       
        <div class="conteudo">
            <img src="<?=$quiz->image?>" alt="Imagem Do QUiz <?=$quiz->nome_quiz?>" title="<?=$quiz->nome_quiz?>">
            <strong><?=$quiz->nome_autor?></strong>
             <h5><?=$quiz->nome_quiz?></h5>
             <p><?=$quiz->descricao?></p>
             <a href="<?=$router->route('s.play',["code"=>$quiz->code])?>">Jogar</a>

        </div>
        <?php endforeach;?>
        <?php
         else:?>
        <div class="semconteudo">

             <p>Desculpe,estamos sem Conteúdo neste momento Que tal  <a href=<?=$router->route('s.create')?>>Criar</a> um?</p>
             <img src=<?= asset("images/triste-emo.jpg")?> alt="Imagem do emoji triste" title="Imagem do emoji triste">
      </div>
      <?php endif;?>

        <a href="<?=$router->route("s.all")?>">Ver Todos</a>
    </main>
  <footer>
  <h6>&copy;<?=date("Y")?>-Direitos Resevardos Ao QuizzyCrazy.</h6>


  </footer>

 <script src="<?= asset("js/jquery-3.5.1.min.js")?>">
 </script>
<script src="<?= asset("js/home.js")?>">
</script>
</body>

</html>
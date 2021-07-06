<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="canonical" href="<?=URL?>">
    <link rel="stylesheet" href="<?= asset("css/create.css")?>">
    <link rel="icon" href="<?= asset("icons/questionario(6).svg")?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="author" content="Paulo Henrique">
    <meta name="creator" content="Paulo Henrique">
    <meta name="description" content="Página de Criação de Quiz,Venha Criar um Quiz No QuizzyCrazy,Crie um Quiz ou Jogue um agora Mesmo.">
    <meta name="robots" content="index,follow"> 
    <meta property="og:locale" content="pt-BR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="QuizzyCrazy">
    <meta property="og:title" content="QuizzyCrazy:Criar um Quiz">
    <meta property="og:description" content="Página de Criação de Quiz,Venha Criar um Quiz No QuizzyCrazy,Crie um Quiz ou Jogue um agora Mesmo.">
    <meta property="og:url" content="">
    <meta property="og:image" content="../assets/images/unnamed.jpg">
    <meta itemprop="name" content="QuizzyCrazy">
    <meta itemprop="description" content="Página de Criação de Quiz,Venha Criar um Quiz No QuizzyCrazy,Crie um Quiz ou Jogue um agora Mesmo.">
    <meta itemprop="image" content="../assets/images/unnamed.jpg">
    <meta name="twitter:title" content="QuizzyCrazy : Plataforma de Quizes">
    <meta name="twitter:description" content="Página de Criação de Quiz,Venha Criar um Quiz No QuizzyCrazy,Crie um Quiz ou Jogue um agora Mesmo.">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="../assets/images/unnamed.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzyCrazy : Criar Um Quiz</title>
</head>
<body>
  <header >
      <img src="<?= asset("images/unnamed.jpg")?>" alt="imagem do topo do QuizzyCrazy" title="imagem do topo do QuizzyCrazy">
     
      <nav class="cabecalho">
         <a class="tracking-in-contract-bck" href="<?=$router->route('s.home')?>">Home</a>
         <a class="tracking-in-contract-bck" href="<?=$router->route("s.all")?>">Ver Todos</a>

      </nav>
  </header>

  <main>
    <h1 class="text-shadow-pop-bottom ">QuizzyCrazy : Criação de Quiz</h1>
    <h2 class="text-shadow-pop-bottom ">Página de Criaçao de Quizes Do QuizzyCrazy</h2>
    <h3 class="text-shadow-pop-bottom ">Crie Um Quiz No QuizzyCrazy</h3>
    <p>Olá,Seja Bem Vindo(a) a Página de Criação do QuizzyCrazy,Obrigado Por ajudar a 
      Construir o conteúdo deste Site, Sua Ajuda é Muito Importante Para Que Este Site Continue Crescendo 
    Confira Embaixo o Formulário para Criar um Quiz  : 
    </p>
    <?php if(!empty($error)): ?>
    <div class="error"> <p><?=$error?></p></div>
    <?php else:
    endif?>
    <form class="form" action="<?=$router->route("save.q")?>" method="post">
      <img src="<?=asset("images/wordpress-quiz-plugins-1024x512.png")?>" alt="Imagem Do Formulario de Criação do QuizzyCrazy" title="Imagem Do Formulario de Criação do QuizzyCrazy">
     
        <label for="na">Autor Do Quiz :</label>
        <input type="text" name="nomeAut" id="na" placeholder="Autor Do Quiz">
     
   
        <label for="nq">Nome Do Quiz :</label>
        <input type="text" name="nomeQuiz" id="nq" placeholder="Nome Do Quiz">
     
   
        <label for="Desc">Descrição :</label>
        <textarea name="Description" id="Desc" >
          
        </textarea>
   
        <label for="pergunta1"> 1° Pergunta :</label>
        <input type="text" name="pergunta1" id="pergunta1">
        <label for="resposta1"> 1° Resposta :</label>
        <input type="text" name="resposta1" id="resposta1">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status1" value="resposta1" >
        
        
        <label for="resposta2"> 2° Resposta :</label>
        <input type="text" name="resposta2" id="resposta2">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status1" value="resposta2">

        
        <label for="resposta3"> 3° Resposta :</label>
        <input type="text" name="resposta3" id="resposta3">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status1" value="resposta3">
        
        
        <label for="resposta4"> 4° Resposta :</label>
        <input type="text" name="resposta4" id="resposta4">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status1" value="resposta4" >

      
        <label for="resposta5"> 5° Resposta :</label>
        <input type="text" name="resposta5" id="resposta5">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status1" value="resposta5" >
       
        
        
        <label for="pergunta2"> 2° Pergunta :</label>
        <input type="text" name="pergunta2" id="pergunta2">
        <label for="resposta6"> 1° Resposta :</label>
        <input type="text" name="resposta6" id="resposta6">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status2" value="resposta6" >
       
        <label for="resposta7"> 2° Resposta :</label>
        <input type="text" name="resposta7" id="resposta7">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status2"value="resposta7" >

        <label for="resposta8"> 3° Resposta :</label>
        <input type="text" name="resposta8" id="resposta8">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status2" value="resposta8">
       
        <label for="resposta9"> 4° Resposta :</label>
        <input type="text" name="resposta9" id="resposta9">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status2"value="resposta9" >
        
        <label for="resposta10"> 5° Resposta :</label>
        <input type="text" name="resposta10" id="resposta10">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status2" value="resposta10">

        
        <label for="pergunta3"> 3° Pergunta :</label>
        <input type="text" name="pergunta3" id="pergunta3">
        <label for="resposta11"> 1° Resposta :</label>
        <input type="text" name="resposta11" id="resposta11">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status3" value="resposta11">
        
        <label for="resposta12"> 2° Resposta :</label>
        <input type="text" name="resposta12" id="resposta12">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status3"value="resposta12" >
       
        <label for="resposta13"> 3° Resposta :</label>
        <input type="text" name="resposta13" id="resposta13">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status3" value="resposta13">
       
        <label for="resposta14"> 4° Resposta :</label>
        <input type="text" name="resposta14" id="resposta14">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status3"value="resposta14" >
       
        <label for="resposta15"> 5° Resposta :</label>
        <input type="text" name="resposta15" id="resposta15">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status3" value="resposta15">
       
        
        <label for="pergunta4"> 4° Pergunta :</label>
        <input type="text" name="pergunta4" id="pergunta4">
        <label for="resposta16"> 1° Resposta :</label>
        <input type="text" name="resposta16" id="resposta16">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status4" value="resposta16">
        
        <label for="resposta17"> 2° Resposta :</label>
        <input type="text" name="resposta17" id="resposta17">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status4" value="resposta17">
        
        <label for="resposta18"> 3° Resposta :</label>
        <input type="text" name="resposta18" id="resposta18">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status4" value="resposta18" >
       
        <label for="resposta19"> 4° Resposta :</label>
        <input type="text" name="resposta19" id="resposta19">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status4"value="resposta19" >
       
        <label for="resposta20"> 5° Resposta :</label>
        <input type="text" name="resposta20" id="resposta20">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status4" value="resposta20">
        
        
        <label for="pergunta5"> 5° Pergunta :</label>
        <input type="text" name="pergunta5" id="pergunta5">
        <label for="resposta21"> 1° Resposta :</label>
        <input type="text" name="resposta21" id="resposta21">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status5" >
       
        <label for="resposta22"> 2° Resposta :</label>
        <input type="text" name="resposta22" id="resposta22">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status5"value="resposta22" >
        
        <label for="resposta23"> 3° Resposta :</label>
        <input type="text" name="resposta23" id="resposta23">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status5" value="resposta23" >
        
        <label for="resposta24"> 4° Resposta :</label>
        <input type="text" name="resposta24" id="resposta24">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status5"  value="resposta24" >
       
        <label for="resposta25"> 5° Resposta :</label>
        <input type="text" name="resposta25" id="resposta25">
        <p>Correta?</p>
        <p>Sim</p>
        <input type="radio" name="status5"  value="resposta25"  >
        <p>Imagem Do Quiz:</p>
        <label  for="arquivo"><img class="imgicon jello-vertical" src="<?=asset("images/upload-big-arrow.png")?>" alt="Botão de Upload" title="Botão de Upload"></label>
        <input type="file" name="Arquivo" id="arquivo">
    <button type="submit">Criar</button>
      

    </form>
  </main>

  <footer>
    <h4>&copy;<?=date("Y")?>-Direitos Reservados Ao QuizzyCrazy </h4>
  </footer>
  <script src="<?=asset("js/jquery-3.5.1.min.js")?>"></script>
  <script src="<?=asset("js/create.js")?>"></script>
</body>
</html>
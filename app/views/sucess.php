<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="<?=asset('icons/sucesso.svg')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?=asset('css/sucess.css')?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuizzyCrazy:Sucesso Na Criaçao Do Quiz</title>
</head>
<body>
    <header>
        <nav>
            <a href="<?=$router->route('s.all')?>">Ver Todos</a>
        </nav>
    </header>
 <main>
 <?php if ($nome):
 ?>
    <h1>QuizzyCrazy:Sucesso Na Criação Do Quiz</h1>
    <p>Obrigado <?=$nome?> Por Criar Um Quiz,Fico Muito Agradecido Por Ajudar Este Site A Ter Mais Conteúdo
    Para Que Voçê e Os Outros Usuários Possam Aproveitar e Se Divertir.Muito Obrigado.   
    </p>
    <img src="<?=asset('images/obrigado-transformando-sonhos-em-resultados.png')?>" alt="Imagem Mostrando sucesso na criação do quiz ">
 </main>
<?php else: 
$router->redirect("s.create");
endif;
?>
 <footer>
     <h2>&copy;<?=date("Y")?>-Direitos Reservados Ao QuizzyCrazy</h2>
 </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\estilo.css">
    <link rel="stylesheet" href="recursos\exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class = "navegacao">
        <a href="index.php" class = "vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class = "conteudo">
           <?php
           //include ('teste/teste.php')
           include (__DIR__."/{$_GET['dir']}/{$_GET['file']}.php")
         
            ?>
        </div>
       
    </main>
    
    <footer class="rodape">
        DTEC CURSO PHP <?= date('Y'); ?>
    </footer>
</body>
</html>
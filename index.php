<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class = "conteudo">
            <nav class="modulos">
               <div class="modulo verde">
                <h3> Módulo 1 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=teste&file=teste">Op. Aritmética</a></li>
                    <li><a href="exercicio.php?dir=equacao&file=desafioequacao">Desafio Equação</a></li>
                    <li><a href="exercicio.php?dir=incremento&file=incremento">Incremento</a></li>
                    <li><a href="exercicio.php?dir=incremento2&file=incremento2">Incremento 2</a></li>
                </ul>
               </div>
               <div class="modulo vermelho">
                <h3> Módulo 2 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=operadores&file=operadores">Operadores</a></li>
                    <li><a href="exercicio.php?dir=exoperador&file=exoperador">Ex. Operadores</a></li>
                    <li><a href="exercicio.php?dir=switch&file=switch">Switch</a></li>
                </ul>
               </div>
               <div class="modulo azul">
                <h3> Módulo 3 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=array&file=array">Array</a></li>
                    <li><a href="exercicio.php?dir=arrayex1&file=arrayex1">Array Ex1</a></li>
                    <li><a href="exercicio.php?dir=get&file=get">GET</a></li>
                </ul>
               </div>
               <div class="modulo roxo">
                <h3> Módulo 4 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=post&file=post">POST</a></li>
                    <li><a href="exercicio.php?dir=post2&file=post2">POST 2</a></li>
                    <li><a href="exercicio.php?dir=post3&file=post3">POST 3</a></li>
                </ul>
               </div>
               <div class="modulo laranja">
                <h3> Módulo 5 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=postAt&file=postAt">POST Exercício</a></li>
                    <li><a href="exercicio.php?dir=for&file=for">Laço FOR(tabuada)</a></li>
                    <li><a href="exercicio.php?dir=while&file=while">Laço WHILE e DO WHILE(tabuada)</a></li>
                </ul>
               </div>
               <div class="modulo verde-escuro">
                <h3> Módulo 6 </h3>
                <ul>
                    <li><a href="exercicio.php?dir=forEarray&file=forEarray"> Atividade com For e Array</a></li>
                    <li><a href="exercicio.php?dir=funcao&file=funcao">FUNÇÂO</a></li>
                    <li><a href="exercicio.php?dir=equacao2grau&file=equacao2grau">Exercício C</a></li>
                </ul>
               </div>
               <div class="modulo vermelho-escuro">
                <h3> Módulo 7 </h3>
                <ul>
                    <li><a href="#">Exercício A</a></li>
                    <li><a href="#">Exercício B</a></li>
                    <li><a href="#">Exercício C</a></li>
                </ul>
               </div>
               <div class="modulo azul-escuro">
                <h3> Módulo 8 </h3>
                <ul>
                    <li><a href="#">Exercício A</a></li>
                    <li><a href="#">Exercício B</a></li>
                    <li><a href="#">Exercício C</a></li>
                </ul>
               </div>
               <div class="modulo roxo-escuro">
                <h3> Módulo 9 </h3>
                <ul>
                    <li><a href="#">Exercício A</a></li>
                    <li><a href="#">Exercício B</a></li>
                    <li><a href="#">Exercício C</a></li>
                </ul>
               </div>   
            </nav>
        </div>
    </main>
    <footer class="rodape">
        DTEC CURSO PHP <?= date('Y') ?>
    </footer>

</body>
</html>
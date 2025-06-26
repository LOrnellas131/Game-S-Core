<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../assets/css/homeMatheus.css">
        <title>Game S Core</title>
    </head>
    <body>
        <header class="header">
            <img src="assets/img/banner.png" class="banner">
            <nav id="menu">
                <ul>
                    <li><a href="gameKey/readKeys.php">Biblioteca</li>
                    <li><a href="game/readGames.php">Loja</a></li>
                    <li><a href="#footer"><img src="assets/img/logo.png"></a></li>
                    <li><a href="publicar.html">Publicar</a></li>
                    <li><a href="perfil.html"><img src="assets/img/perfil.html"></a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="gameKey/createKey.php" method="post">
                <h2 class="texto">Recomendações</h2>
                <div class="area">
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo1.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=1>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo2.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=2>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                        <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo3.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=3>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo4.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=4>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                </div>
                <h2 class="texto">Descontos</h2>
                <div class="area">
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo5.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=5>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo6.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=6>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo7.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=7>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                    <div class="caixa">
                        <h3>Nome jogo</h3>
                        <img src="assets/img/jogo8.png">
                        <p>Breve descrição</p>
                        <h6>R$ preço</h6>
                        <input type="hidden" name="idJogo" value=8>
                        <button class="comprar" type="submit">Comprar</button>
                    </div>
                </div>
            </form>
        </main>
        <footer id="footer">
            <h1>Sobre Nós</h1>
            <p>   Nós somos apenas dois adolescentes que querem criar<br>
                um espaço que simbolize o descanso e lazer, afinal é bem<br>
                comum você querer descansar, pegar o controle de video game<br>
                e quando você vê, um jogo custa 60 até 100 reais, ou acima<br>
                disso, por esse motivo nós desenvolvemos essa plataforma<br>
                para ser acessivel.<br>
            </p>
            <div class="caixa-foto">
                <div class="foto">
                    <a href="https://github.com/Math-29">
                        <img src="assets/img/matheus.png">
                    </a>
                </div>
                <p>Matheus Augusto</p>
                <div class="foto">
                    <a href="https://github.com/LOrnellas131">
                        <img src="assets/img/ornellas.png">
                    </a>
                </div>
                <p>Lucas da Silva</p>
            </div>
        </footer>
    </body>
</html>

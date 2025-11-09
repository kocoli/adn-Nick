<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:Boas vindas:..</title>
</head>
<body>
    <header>
        <h1>ATELIÊ DA NICK</h1>
        <nav>
            <ul>
                <li><a href="<?= url("site/"); ?>">Início</a></li>
                <li><a href="<?= url("site/about"); ?>">Sobre</a></li>
                <li><a href="<?= url("site/faq"); ?>">FAQ</a></li>
                <li><a href="<?= url("site/contact"); ?>">Contato</a></li>
                <li><a href="<?= url("site/login"); ?>">Entrar</a></li>
                <li><a href="<?= url("site/register"); ?>">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="conteudo"><?= $this->section("main") ?></main>

    <footer>
        
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:Boas vindas:..</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"   integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= url("assets/web/css/style.css"); ?>">
</head>
<body>
    <header>
        <div class="container">
            <h1>Ateliê da Nick</h1>
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
        </div>
    </header>
    
    <main class="conteudo">
        <?= $this->section("main") ?>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>Ateliê da Nick</h2>
                <p>Transforme suas ideias em arte. Tudo para tecer seus sonhos!</p>
            </div>

            <div class="footer-social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y'); ?> Ateliê da Nick — Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

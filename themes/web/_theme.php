<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..:Boas vindas:..</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"   integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= url("assets/web/css/style.css"); ?>">
    <?php if ($this->section("specific-style")): ?>
      <?= $this->section("specific-style"); ?>
    <?php endif; ?>
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="<?= url(""); ?>">ATELIÊ DA NICK</a></h1>
            <div class="perfil">
                <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Avatar do cliente">
                <span class="nome-cliente">Bem-vindo!</span>

                <div class="modal">                
                    <ul class="perfil-opcoes">
                        <li><a href="<?= url(""); ?>">Início</a></li>
                        <li><a href="<?= url("about"); ?>">Sobre</a></li>
                        <li><a href="<?= url("faq"); ?>">FAQ</a></li>
                        <li><a href="<?= url("contact"); ?>">Contato</a></li>
                        <li><a href="<?= url("login"); ?>">Entrar</a></li>
                    </ul>
                </div>

            </div>
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

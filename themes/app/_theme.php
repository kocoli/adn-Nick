<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.::ATELIÊ::..</title>
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="<?= url("assets/app/css/style.css"); ?>">
    
    <?php if ($this->section("specific-style")): ?>
      <?= $this->section("specific-style"); ?>
    <?php endif; ?>

</head>
<body>
    <header>
        <div class="nav">
            <h1><a href="<?= url("app/"); ?>">ATELIÊ DA NICK</a></h1>
            <input type="search" name="search" id="search" placeholder="Pesquse produtos aqui...">
            <button class="btn-icon"><a href="<?= url("app/cart"); ?>"><i class="bi bi-cart3"></i></a></button>
            <button class="btn-icon"><a href="<?= url("app/favorites"); ?>"><i class="bi bi-heart"></i></a></button> 
            <button class="btn-icon"><a href="<?= url("app/community"); ?>"><i class="bi bi-chat-dots"></i></a></button>

            <div class="perfil">
                <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Avatar do cliente">
                <span class="nome-cliente">Fábio Santos</span>
                <div class="modal">
                    <header>Olá, Fábio Santos</header>
                
                    <div class="perfil-info">
                        <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Avatar do cliente">
                        <div class="perfil-links">
                            <a href="<?= url("app/edit") ?>">Minha conta</a>
                            <a href="<?= url("app/orders") ?>">Meus pedidos</a>
                        </div>
                    </div>
                
                    <ul class="perfil-opcoes">
                        <li><a href="<?= url("app/") ?>">Início</a></li>
                        <li><a href="<?= url("app/products") ?>">Produtos</a></li>
                        <li><a href="<?= url("app/avaliation") ?>">Avaliações</a></li>
                        <li><a href="<?= url("app/refund") ?>">Reembolsos</a></li>
                        <li><a href="<?= url("app/articles") ?>">Artigos</a></li>
                        <li><a href="#">Sair</a></li>
                    </ul>
                </div>
            </div>           
        </div>
        <div class="categoryes">
            <nav>
                <ul>
                    <li>
                        Fios e linhas
                        <div class="sub-menu">
                            <ul>
                                <li>Linhas de crochê</li>
                                <li>Linhas de bordado</li>
                                <li>Lãs e barbantes</li>
                                <li>Fios de algodão</li>
                                <li>Fios sintéticos</li>
                                <li>Fios especiais</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Tecidos e Feltros
                        <div class="sub-menu">
                            <ul>
                                <li>Tecido de algodão</li>
                                <li>Feltro</li>
                                <li>Tecido tricoline</li>
                                <li>Tecido estampado</li>
                                <li>Retalhos e kits</li>
                                <li>TNT e tecidos sintéticos</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Agulhas e Ferramentas
                        <div class="sub-menu">
                            <ul>
                                <li>Agulhas de crochê</li>
                                <li>Agulhas de tricô</li>
                                <li>Agulhas de costura</li>
                                <li>Tesouras e cortadores</li>
                                <li>Alfinetes e marcadores</li>
                                <li>Dedais e acessórios</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Acessórios para Costura
                        <div class="sub-menu">
                            <ul>
                                <li>Botões e zíperes</li>
                                <li>Fitas e rendas</li>
                                <li>Elásticos</li>
                                <li>Viés e passamanarias</li>
                                <li>Enchimentos e mantas acrílicas</li>
                                <li>Fechos e colchetes</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Artesanato e Decoração
                        <div class="sub-menu">
                            <ul>
                                <li>Peças prontas</li>
                                <li>Enfeites e pendentes</li>
                                <li>Guirlandas e arranjos</li>
                                <li>Miniaturas e MDF cru</li>
                                <li>Pintura e decoupage</li>
                                <li>Velas e sabonetes artesanais</li>
                                <li>Bisqui</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Kits de Artesanato
                        <div class="sub-menu">
                            <ul>
                                <li>Crochê</li>
                                <li>Tricô</li>
                                <li>Bordado</li>
                                <li>Infantil</li>
                                <li>Costura básica</li>
                                <li>Arte em feltro</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Materiais para Customização
                        <div class="sub-menu">
                            <ul>
                                <li>Tintas e pincéis</li>
                                <li>Apliques e patches</li>
                                <li>Pérolas e pedrarias</li>
                                <li>Strass e glitter</li>
                                <li>Adesivos e etiquetas</li>
                                <li>Ferramentas de aplicação</li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        Peças Prontas
                        <div class="sub-menu">
                            <ul>
                                <li>Bolsas e carteiras</li>
                                <li>Amigurumis</li>
                                <li>Roupas e acessórios</li>
                                <li>Itens para casa</li>
                                <li>Cartões e encapamento</li>
                                <li>Peças de bisqui</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="conteudo"><?= $this->section("main") ?></main>

    <footer id="footer">
    <div class="footer-container">
        <div class="footer-about">
            <h4>Sobre o Ateliê</h4>
            <p>
                O <strong>Ateliê da Nick</strong> nasceu do amor pelo artesanato.  
                Aqui, cada produto é feito com carinho, criatividade e dedicação.  
                Nosso propósito é valorizar o trabalho manual e conectar pessoas através da arte.
            </p>
        </div>

        <div class="footer-links">
            <h4>Links úteis</h4>
            <ul>
                <li><a href="<?= url('app/') ?>">Início</a></li>
                <li><a href="<?= url('app/products') ?>">Loja</a></li>
                <li><a href="<?= url('app/favorites') ?>">Favoritos</a></li>
                <li><a href="<?= url('app/profile') ?>">Meu Perfil</a></li>
                <li><a href="<?= url('app/articles') ?>">Histórias</a></li>
            </ul>
        </div>

        <div class="footer-social">
            <h4>Conecte-se</h4>
            <div class="social-icons">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-pinterest"></i></a>
                <a href="#"><i class="bi bi-envelope-fill"></i></a>
            </div>
            <p class="copyright">
                &copy; <?= date("Y"); ?> Ateliê da Nick. Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer>

</body>
</html>
<?php $this->layout("_theme", ["title" => "Página inicial"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/home.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<!-- ==================== BANNER PRINCIPAL ==================== -->
<section id="banner">
    <div class="banner-content">
        <div class="banner-text">
            <h2>Transforme suas ideias em arte</h2>
            <p>Tudo para tecer seus sonhos. Encontre os melhores produtos de artesanato e tecelagem!</p>
            <a href="<?= url("app/products"); ?>" class="btn-banner">Explorar produtos</a>
        </div>
        <div class="banner-img">
            <img src="<?= url("assets/_shared/img/um-conjunto-de-roupas-de-malha-clew-agulhas-de-trico-desenho-a-mao_61136-874"); ?>" alt="Materiais de artesanato coloridos">
        </div>
    </div>
</section>

<!-- ==================== PRODUTOS EM DESTAQUE ==================== -->
<section id="top-products">
    <h3>Produtos em Destaque</h3>
    <div class="product-grid">
        <div class="product-card">
            <img src="https://images.tcdn.com.br/img/img_prod/1182410/kit_10_rolos_fio_elastico_colorido_100m_544_1_13bcf11868ba723d71420bc376c65746.jpg" alt="Lã colorida">
            <h4>Kit de Fios Coloridos</h4>
            <p>R$ 49,90</p>
            <button>Ver detalhes</button>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR465jie9IwWf7g8cibZvkvu2u_wwPPNjFJZA&s" alt="Linha de algodão">
            <h4>Fio de Algodão Premium</h4>
            <p>R$ 25,00</p>
            <button>Ver detalhes</button>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqNIG6FKXSL-NmvtGv5E0R-GVfyBS0hofBwA&s" alt="Linha de algodão">
            <h4>Fio de Algodão Premium</h4>
            <p>R$ 25,00</p>
            <button>Ver detalhes</button>
        </div>

        <div class="product-card">
            <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSpiL9PZu_GeSVlBwUR-GChkjT0Us2NnVT1Af7gsjcJT1tvbnfOuve5qEfIbEu0gfIOjeobrVs0c-4vBUIOtKgXgvihe66xoXfN4WJSlRUOf6142wn9LaJ7kNSacY7MiYs0aBUsaFQ&usqp=CAc" alt="Linha de algodão">
            <h4>Fio de Algodão Premium</h4>
            <p>R$ 25,00</p>
            <button>Ver detalhes</button>
        </div>

        <div class="product-card">
            <img src="data:image/jpeg;base64,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" alt="Agulhas de crochê">
            <h4>Agulhas de Crochê Confort</h4>
            <p>R$ 35,00</p>
            <button>Ver detalhes</button>
        </div>
    </div>
</section>

<!-- ==================== Clientes premium ==================== -->
<section id="partners">
    <h3>Super Parceiros</h3>
    <p class="subtitle">Conheça nossos clientes premium mais ativos da loja 💛</p>

    <div class="partners-grid">
        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 1">
            <h4>Ateliê da Rosa</h4>
            <span>💫 152 vendas</span>
        </div>

        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 2">
            <h4>Fios & Tramas</h4>
            <span>✨ 138 vendas</span>
        </div>

        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 3">
            <h4>Costura Criativa</h4>
            <span>💛 126 vendas</span>
        </div>

        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 4">
            <h4>Mimos da Lu</h4>
            <span>🌸 119 vendas</span>
        </div>

        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 5">
            <h4>Ponto a Ponto</h4>
            <span>🧵 102 vendas</span>
        </div>

        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 6">
            <h4>Arte com Amor</h4>
            <span>💐 97 vendas</span>
        </div>

        <div class="partner-card">
            <img src="<?= url("assets/_shared/img/avatar-default.jpg") ?>" alt="Parceiro 7">
            <h4>Doce Crochê</h4>
            <span>🌷 90 vendas</span>
        </div>
    </div>
</section>


<!-- ==================== AVALIAÇÕES DE CLIENTES ==================== -->
<section id="avaliation">
    <h3>O que nossos clientes dizem</h3>
    <div class="avaliations">
        <div class="avaliation-card">
            <p>"A qualidade dos produtos é incrível! Os fios são super macios e as entregas sempre pontuais."</p>
            <div class="client">
                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Cliente 1">
                <span>Ana Paula</span>
            </div>
        </div>

        <div class="avaliation-card">
            <p>"Adoro o atendimento e a variedade de produtos. Sempre encontro tudo o que preciso!"</p>
            <div class="client">
                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Cliente 2">
                <span>Mariana Costa</span>
            </div>
        </div>

        <div class="avaliation-card">
            <p>"Super recomendo! Me ajudaram a escolher os materiais certos pro meu novo projeto de crochê."</p>
            <div class="client">
                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Cliente 3">
                <span>Juliana Souza</span>
            </div>
        </div>
    </div>
</section>

<section id="publicity">
    <div class="publicity-content">
        <h3>Nossas Histórias 💕</h3>
        <p>
            O Ateliê da Nick é mais do que uma loja — é um espaço de inspiração, afeto e transformação.  
            Cada peça carrega um pedaço da alma de quem cria.  
            Conheça as histórias emocionantes de artesãos e artesãs que fazem parte da nossa comunidade e descubra como a arte mudou suas vidas.
        </p>

        <a href="<?= url("app/articles"); ?>" class="btn-article">Ler artigos</a>
    </div>
</section>

<?php $this->end(); ?>

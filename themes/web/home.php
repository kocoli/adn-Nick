<?php $this->layout("_theme", ["title" => "Início"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/web/css/home.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>
    <!-- ==================== BANNER PRINCIPAL ==================== -->
    <section id="banner">
        <div class="banner-content">
            <div class="banner-text">
              <h2>Bem-vindo ao Ateliê da Nick!</h2>
              <p>
                Um espaço onde a arte e a praticidade se encontram. 🌷  
                Aqui, você pode comprar produtos artesanais únicos, encontrar materiais para suas criações  
                e, se for artesão, gerenciar sua própria loja de forma simples e encantadora.
              </p>
              <ul>
                <li>Descubra fios, tecidos, tintas e peças personalizadas</li>
                <li>Adquira materiais e presentinhos feitos com carinho</li>
                <li>Cadastre-se como vendedor e exponha suas próprias criações</li>
                <li>Gerencie produtos, pedidos e muito mais em um só lugar</li>
              </ul>
              <p>
                ✨ Seja para comprar ou criar, o Ateliê da Nick é o seu cantinho artesanal online.
              </p>
                 <div class="banner-buttons">
                   <a href="#" class="btn-vendedor">Quero Vender</a>
                   <a href="#" class="btn-cliente">Quero Comprar</a>
                 </div>
            </div>
            
            <div class="banner-img">
                <img src="<?= url("assets/_shared/img/402e54c5229e4143c2c4305038552e5a (1).png") ?>">
            </div>
        </div>
    </section>
<?php $this->end(); ?>
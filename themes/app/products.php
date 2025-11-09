<?php $this->layout("_theme", ["title" => "Produtos"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/products.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="products-header">
    <h2><i class="bi bi-basket"></i> Produtos</h2>
</section>

<section id="filters">
    <div class="filter-group">
        <button class="active">Todos</button>
        <button>Fios e Linhas</button>
        <button>Tecidos</button>
        <button>Ferramentas</button>
        <button>Acessórios</button>
        <button>Kits</button>
        <button>Peças Prontas</button>
    </div>
</section>

<section id="products-container">
    <!-- Exemplo de produto -->
    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1616627893722-f8d593c1d558?w=400" alt="Produto">
        <div class="product-info">
            <h3>Fio de Algodão Natural</h3>
            <p>Ideal para crochê, tricô e macramê. Suavidade e resistência incomparáveis.</p>
            <span class="price">R$ 24,50</span>
            <div class="product-actions">
                <button><i class="bi bi-cart-plus"></i></button>
                <button><i class="bi bi-heart"></i></button>
                <button><i class="bi bi-eye"></i></button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1604594849809-26f4c39b4d69?w=400" alt="Produto">
        <div class="product-info">
            <h3>Kit de Crochê Iniciante</h3>
            <p>Contém fios, agulhas e instruções. Tudo o que você precisa para começar!</p>
            <span class="price">R$ 59,90</span>
            <div class="product-actions">
                <button><i class="bi bi-cart-plus"></i></button>
                <button><i class="bi bi-heart"></i></button>
                <button><i class="bi bi-eye"></i></button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1616627903637-c9f6a43f963f?w=400" alt="Produto">
        <div class="product-info">
            <h3>Agulhas Premium</h3>
            <p>Confortáveis, leves e perfeitas para longas horas de artesanato.</p>
            <span class="price">R$ 39,90</span>
            <div class="product-actions">
                <button><i class="bi bi-cart-plus"></i></button>
                <button><i class="bi bi-heart"></i></button>
                <button><i class="bi bi-eye"></i></button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <img src="https://images.unsplash.com/photo-1580927752452-89d86da3fa0a?w=400" alt="Produto">
        <div class="product-info">
            <h3>Tecido Tricoline Floral</h3>
            <p>Perfeito para costura criativa, patchwork e decorações personalizadas.</p>
            <span class="price">R$ 32,00</span>
            <div class="product-actions">
                <button><i class="bi bi-cart-plus"></i></button>
                <button><i class="bi bi-heart"></i></button>
                <button><i class="bi bi-eye"></i></button>
            </div>
        </div>
    </div>
</section>

<?php $this->end(); ?>

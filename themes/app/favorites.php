<?php $this->layout("_theme", ["title" => "Favoritos"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/favorites.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="favorites-header">
    <h2><i class="bi bi-heart-fill"></i> Meus Favoritos <i class="bi bi-heart-fill"></i></h2>
</section>

<section id="favorites-container">
    <!-- Produto Favorito -->
    <div class="favorite-item">
        <img src="https://images.unsplash.com/photo-1616627987295-1b99e8d7d06a?w=400" alt="Produto favorito">
        <div class="info">
            <h3>Kit de Crochê Iniciante</h3>
            <p>Contém fios, agulhas e instruções para você começar a criar.</p>
            <span class="price">R$ 59,90</span>
            <div class="actions">
                <button class="add-cart"><i class="bi bi-cart-plus"></i> Adicionar ao carrinho</button>
                <button class="remove"><i class="bi bi-trash"></i> Remover</button>
            </div>
        </div>
    </div>

    <div class="favorite-item">
        <img src="https://images.unsplash.com/photo-1616627893722-f8d593c1d558?w=400" alt="Produto favorito">
        <div class="info">
            <h3>Fio de Algodão Natural</h3>
            <p>Perfeito para crochê, tricô e macramê. Alta qualidade e toque suave.</p>
            <span class="price">R$ 24,50</span>
            <div class="actions">
                <button class="add-cart"><i class="bi bi-cart-plus"></i> Adicionar ao carrinho</button>
                <button class="remove"><i class="bi bi-trash"></i> Remover</button>
            </div>
        </div>
    </div>

    <div class="favorite-item">
        <img src="https://images.unsplash.com/photo-1616627903637-c9f6a43f963f?w=400" alt="Produto favorito">
        <div class="info">
            <h3>Agulhas de Tricô Premium</h3>
            <p>Leves, resistentes e perfeitas para longas horas de criação.</p>
            <span class="price">R$ 39,90</span>
            <div class="actions">
                <button class="add-cart"><i class="bi bi-cart-plus"></i> Adicionar ao carrinho</button>
                <button class="remove"><i class="bi bi-trash"></i> Remover</button>
            </div>
        </div>
    </div>
</section>

<?php $this->end(); ?>

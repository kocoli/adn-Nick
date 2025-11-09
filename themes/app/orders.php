<?php $this->layout("_theme", ["title" => "Meus Pedidos"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/orders.css"); ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="orders">
    <h2>Meus Pedidos</h2>

    <!-- ======== FILTROS E PESQUISA ======== -->
    <div class="filters">
        <div class="status-filters">
            <button class="filter-btn active" data-status="todos">Todos</button>
            <button class="filter-btn" data-status="aberto">Abertos</button>
            <button class="filter-btn" data-status="finalizado">Finalizados</button>
            <button class="filter-btn" data-status="cancelado">Cancelados</button>
        </div>

        <div class="search-bar">
            <input type="text" id="search-order" placeholder="Buscar pedido por nome, ID ou produto...">
        </div>
    </div>

    <!-- ======== LISTAGEM DE PEDIDOS ======== -->
    <div class="orders-list">

        <!-- Exemplo de pedido -->
        <div class="order-card" data-status="aberto">
            <header>
                <span class="order-id">Pedido #1023</span>
                <span class="order-status aberto">Aberto</span>
            </header>

            <div class="order-info">
                <img src="https://cdn.pixabay.com/photo/2017/01/31/13/14/yarn-2021473_640.jpg" alt="Produto">
                <div>
                    <h4>Kit de Fios Coloridos para Crochê</h4>
                    <p><strong>Vendedor:</strong> Maria Artesã</p>
                    <p><strong>Total:</strong> R$ 65,90</p>
                    <p><strong>Data:</strong> 03/11/2025</p>
                </div>
            </div>

            <div class="order-actions">
                <button class="btn-detail">Ver detalhes</button>
                <button class="btn-cancel">Cancelar</button>
            </div>
        </div>

        <div class="order-card" data-status="finalizado">
            <header>
                <span class="order-id">Pedido #1022</span>
                <span class="order-status finalizado">Finalizado</span>
            </header>

            <div class="order-info">
                <img src="https://cdn.pixabay.com/photo/2015/12/09/17/12/thread-1084977_640.jpg" alt="Produto">
                <div>
                    <h4>Agulha de Crochê Premium</h4>
                    <p><strong>Vendedor:</strong> Ateliê da Ju</p>
                    <p><strong>Total:</strong> R$ 29,90</p>
                    <p><strong>Data:</strong> 25/10/2025</p>
                </div>
            </div>

            <div class="order-actions">
                <button class="btn-detail">Avaliar</button>
                <button class="btn-refund">Pedir Reembolso</button>
            </div>
        </div>

        <div class="order-card" data-status="cancelado">
            <header>
                <span class="order-id">Pedido #1020</span>
                <span class="order-status cancelado">Cancelado</span>
            </header>

            <div class="order-info">
                <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Produto">
                <div>
                    <h4>Pacote de Linhas de Seda</h4>
                    <p><strong>Vendedor:</strong> Ana Atelier</p>
                    <p><strong>Total:</strong> R$ 79,90</p>
                    <p><strong>Data:</strong> 18/10/2025</p>
                </div>
            </div>

            <div class="order-actions">
                <button class="btn-disabled" disabled>Pedido Cancelado</button>
            </div>
        </div>

    </div>
</section>

<?php $this->end(); ?>

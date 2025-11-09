<?php $this->layout("_theme", ["title" => "Carrinho de Compras"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/cart.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="cart-page">
    <h2><i class="bi bi-cart3"></i> Seu Carrinho</h2>

    <div class="cart-container">
        <!-- LISTA DE PRODUTOS -->
        <div class="cart-items">
            <table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço Unitário</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de item -->
                    <tr>
                        <td class="produto-info">
                            <img src="https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=120&q=80" alt="Produto">
                            <span>Fio de algodão rosa bebê</span>
                        </td>
                        <td>R$ 25,90</td>
                        <td>
                            <div class="quantidade">
                                <button>-</button>
                                <input type="number" value="1" min="1">
                                <button>+</button>
                            </div>
                        </td>
                        <td>R$ 25,90</td>
                        <td><i class="bi bi-trash remove"></i></td>
                    </tr>

                    <tr>
                        <td class="produto-info">
                            <img src="https://images.unsplash.com/photo-1616627567140-4b5e422be4c9?auto=format&fit=crop&w=120&q=80" alt="Produto">
                            <span>Agulha de crochê 3.5mm</span>
                        </td>
                        <td>R$ 8,50</td>
                        <td>
                            <div class="quantidade">
                                <button>-</button>
                                <input type="number" value="2" min="1">
                                <button>+</button>
                            </div>
                        </td>
                        <td>R$ 17,00</td>
                        <td><i class="bi bi-trash remove"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- RESUMO DO PEDIDO -->
        <aside class="cart-summary">
            <h3>Resumo do Pedido</h3>
            <div class="summary-info">
                <p><span>Subtotal:</span> R$ 42,90</p>
                <p><span>Frete:</span> R$ 12,00</p>
                <p class="total"><span>Total:</span> R$ 54,90</p>
            </div>

            <button class="btn-finalizar">Finalizar Compra</button>
            <a href="<?= url('loja') ?>" class="btn-voltar">Continuar Comprando</a>
        </aside>
    </div>
</section>

<!-- SUGESTÕES -->
<section id="suggestions">
    <h3>Você pode gostar também</h3>
    <div class="suggestions-grid">
        <div class="item">
            <img src="https://images.unsplash.com/photo-1616627567140-4b5e422be4c9?auto=format&fit=crop&w=200&q=80" alt="">
            <p>Kit agulhas coloridas</p>
            <span>R$ 29,90</span>
        </div>
        <div class="item">
            <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=200&q=80" alt="">
            <p>Fio de algodão verde menta</p>
            <span>R$ 22,50</span>
        </div>
        <div class="item">
            <img src="https://images.unsplash.com/photo-1613411069986-79b7e8ddc9c4?auto=format&fit=crop&w=200&q=80" alt="">
            <p>Botões de madeira artesanal</p>
            <span>R$ 15,90</span>
        </div>
    </div>
</section>

<?php $this->end(); ?>

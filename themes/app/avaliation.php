<?php $this->layout("_theme", ["title" => "Avaliar Produto"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/avaliation.css"); ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="avaliation">
    <div class="order-info">
        <h2>Detalhes do Pedido</h2>
        <div class="order-card">
            <img src="https://cdn.pixabay.com/photo/2016/03/31/20/39/yarn-1291104_1280.jpg" alt="Produto">
            <div class="details">
                <h3>Kit de Linhas Premium</h3>
                <p><strong>Vendedor:</strong> Artes da Lúcia</p>
                <p><strong>Data da compra:</strong> 05/11/2025</p>
                <p><strong>Total:</strong> R$ 129,90</p>
                <p><strong>Status:</strong> Pedido enviado pelo vendedor ✅</p>
            </div>
        </div>

        <button id="btn-received">Já recebi o pedido</button>
    </div>

    <form id="review-form">
        <h3>Deixe sua avaliação</h3>

        <label for="rating">Sua nota:</label>
        <div class="stars">
            <input type="radio" name="rating" id="star5" value="5"><label for="star5">★</label>
            <input type="radio" name="rating" id="star4" value="4"><label for="star4">★</label>
            <input type="radio" name="rating" id="star3" value="3"><label for="star3">★</label>
            <input type="radio" name="rating" id="star2" value="2"><label for="star2">★</label>
            <input type="radio" name="rating" id="star1" value="1"><label for="star1">★</label>
        </div>

        <label for="comment">Comentário:</label>
        <textarea id="comment" rows="4" placeholder="Conte como foi sua experiência..."></textarea>

        <button type="submit">Enviar Avaliação</button>
    </form>
</section>

<script>
    const btnReceived = document.querySelector("#btn-received");
    const form = document.querySelector("#review-form");

    btnReceived.addEventListener("click", () => {
        form.style.display = "block";
        btnReceived.style.display = "none";
    });
</script>

<?php $this->end(); ?>

<?php $this->layout("_theme", ["title" => "Solicitar Reembolso"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/app/css/refund.css"); ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section id="refund">
    <div class="order-info">
        <h2>Solicitação de Reembolso</h2>
        <div class="order-card">
            <img src="https://cdn.pixabay.com/photo/2016/03/31/20/39/yarn-1291104_1280.jpg" alt="Produto">
            <div class="details">
                <h3>Kit de Linhas Premium</h3>
                <p><strong>Vendedor:</strong> Artes da Lúcia</p>
                <p><strong>Data da compra:</strong> 05/11/2025</p>
                <p><strong>Total pago:</strong> R$ 129,90</p>
                <p><strong>Status do pedido:</strong> Entregue ✅</p>
            </div>
        </div>
    </div>

    <form id="refund-form">
        <h3>Motivo da solicitação</h3>

        <label for="reason">Selecione o motivo:</label>
        <select id="reason" required>
            <option value="">Selecione...</option>
            <option value="defeito">Produto com defeito</option>
            <option value="diferente">Produto diferente do pedido</option>
            <option value="atraso">Atraso na entrega</option>
            <option value="arrependimento">Desisti da compra</option>
        </select>

        <label for="description">Descreva o problema:</label>
        <textarea id="description" rows="4" placeholder="Explique o motivo do seu pedido de reembolso..." required></textarea>

        <label for="image">Envie uma imagem (opcional):</label>
        <input type="file" id="image" accept="image/*">

        <button type="submit">Enviar solicitação</button>

        <p class="note">⚠️ Sua solicitação será analisada pela equipe do Ateliê da Nick.  
        O prazo de resposta é de até <strong>5 dias úteis</strong>.</p>
    </form>

    <div id="success-message">
        ✅ Sua solicitação foi enviada com sucesso!  
        <span>Acompanhe o status na área de pedidos.</span>
    </div>
</section>

<script>
    const form = document.querySelector("#refund-form");
    const successMsg = document.querySelector("#success-message");

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        form.style.display = "none";
        successMsg.style.display = "flex";
    });
</script>

<?php $this->end(); ?>

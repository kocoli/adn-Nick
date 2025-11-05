<?php $this->layout("_theme", ["title" => "Cadastro de Produtos"]); ?>

<?php $this->start("main"); ?>
    <form>
        <div class="group">
            <h2>Informações Básicas</h2>
            <input type="text" name="name" placeholder="Nome do produto">
            <input type="text" name="decription" placeholder="Descrição do produto">
            <select name="category">
                <option value="" disabled selected hidden>Selecione uma categoria...</option>
                <option value="">Personalizados</option>
                <option value="">Fios e Agulhas</option>
                <option value="">Tecidos e enxovais</option>
                <option value="">Tintas e pinceis</option>
                <option value="">Papelaria, adesivos e Kits</option>
            </select>
            <!-- Ver sub-categorias depois -->
            <input type="text" name="code">
        </div>
        <div class="group">
            <h2>Informações comerciais</h2>
            <input type="text" name="price" placeholder="preço de venda">
            <input type="text" name="promotion" placeholder="preço Promocional">
            <input type="text" name="gasto" placeholder="Custo do Produto">
            <input type="text" name="quantidady" placeholder="Quantidade dísponivel">
        </div>
        <div class="group">

        </div>
        <div class="group">

        </div>
        <div class="group">

        </div>
        <div class="group">

        </div>
        <div class="group">

        </div>
        <div class="group">

        </div>
    </form>
<?php $this->end(); ?>
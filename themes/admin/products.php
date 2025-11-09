<?php $this->layout("_theme", ["title" => "Cadastro de Produtos"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/admin/css/products.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>
    <section class="form-produto">
      <form action="#" method="post" enctype="multipart/form-data">
        <!-- INFORMAÇÕES BÁSICAS -->
        <fieldset>
          <legend>Informações Básicas</legend>

          <div class="campo">
            <label for="nome">Nome do Produto *</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Kit Crochê Básico" required>
          </div>

          <div class="campo">
            <label for="descricao">Descrição</label>
            <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva o produto, materiais e diferenciais..."></textarea>
          </div>

          <div class="grupo">
            <div class="campo">
              <label for="categoria">Categoria</label>
              <select id="categoria" name="categoria">
                <option value="">Selecione</option>
                <option value="fios">Fios e Linhas</option>
                <option value="tecidos">Tecidos e Feltros</option>
                <option value="ferramentas">Agulhas e Ferramentas</option>
                <option value="costura">Acessórios para Costura</option>
                <option value="decoracao">Artesanato e Decoração</option>
                <option value="artesanato">Kits de Artesanato</option>
                <option value="customisar">Materiais para Customização</option>
                <option value="customisar">Materiais para Customização</option>
                <option value="prontos">Peças Prontas</option>
              </select>
            </div>

              <div class="campo">
                <label for="subcategoria">Subcategoria</label>
                <select id="subcategoria" name="subcategoria">
                  <option value="">Selecione uma categoria primeiro</option>
                </select>
              </div>

            <div class="campo">
              <label for="codigo">Código / SKU</label>
              <input type="text" id="codigo" name="codigo" placeholder="Ex: FIO-12345">
            </div>
          </div>
        </fieldset>

        <!-- INFORMAÇÕES COMERCIAIS -->
        <fieldset>
          <legend>Informações Comerciais</legend>

          <div class="grupo">
            <div class="campo">
              <label for="preco">Preço de Venda (R$)</label>
              <input type="number" step="0.01" id="preco" name="preco" placeholder="Ex: 89.90">
            </div>

            <div class="campo">
              <label for="promocional">Preço Promocional (R$)</label>
              <input type="number" step="0.01" id="promocional" name="promocional" placeholder="Ex: 79.90">
            </div>

            <div class="campo">
              <label for="frete">Preço do Frete (R$)</label>
              <input type="number" step="0.01" id="frete" name="frete" placeholder="Ex: 79.90">
            </div>

            <div class="campo">
              <label for="estoque">Estoque Atual</label>
              <input type="number" id="estoque" name="estoque" placeholder="Ex: 50">
            </div>
          </div>

          <div class="campo">
            <label>Status</label>
            <div class="radio-group">
              <label><input type="radio" name="status" value="ativo" checked> Ativo</label>
              <label><input type="radio" name="status" value="inativo"> Inativo</label>
            </div>
          </div>
        </fieldset>

        <!-- MÍDIA -->
        <fieldset>
          <legend>Imagens</legend>

          <div class="campo">
            <label for="imagem">Imagem Principal</label>
            <input type="file" id="imagem" name="imagem" accept="image/*">
          </div>

          <div class="campo">
            <label for="galeria">Imagens Adicionais</label>
            <input type="file" id="galeria" name="galeria[]" accept="image/*" multiple>
          </div>
        </fieldset>

        <!-- DETALHES -->
        <fieldset>
          <legend>Detalhes Técnicos</legend>

          <div class="grupo">
            <div class="campo">
              <label for="peso">Peso (g)</label>
              <input type="number" id="peso" name="peso" placeholder="Ex: 250">
            </div>

            <div class="campo">
              <label for="cor">Cor</label>
              <input type="text" id="cor" name="cor" placeholder="Ex: Rosa Bebê">
            </div>

            <div class="campo">
              <label for="material">Material</label>
              <input type="text" id="material" name="material" placeholder="Ex: 100% Algodão">
            </div>
          </div>

          <div class="grupo">
            <div class="campo">
              <label for="largura">Largura (cm)</label>
              <input type="number" id="largura" name="largura">
            </div>
            <div class="campo">
              <label for="altura">Altura (cm)</label>
              <input type="number" id="altura" name="altura">
            </div>
            <div class="campo">
              <label for="profundidade">Profundidade (cm)</label>
              <input type="number" id="profundidade" name="profundidade">
            </div>
          </div>
        </fieldset>

        <!-- BOTÕES -->
        <div class="botoes-form">
          <button type="submit" class="btn salvar"><i class="fa-solid fa-check"></i> Salvar Produto</button>
          <button type="reset" class="btn limpar"><i class="fa-solid fa-eraser"></i> Limpar Campos</button>
        </div>
      </form>
    </section>
<?php $this->end(); ?>
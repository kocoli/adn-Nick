<?php $this->layout("_theme", ["title" => "Criar Novo Cupom"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/admin/css/cupons.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>
    <section class="cupons-admin">

      <!-- ===== FORMULÁRIO PARA NOVO CUPOM ===== -->
      <form class="form-cupom">

        <div class="grupo-form">
          <label for="codigo">Código do Cupom</label>
          <input type="text" id="codigo" name="codigo" placeholder="Ex: NICK10">
        </div>

        <div class="grupo-form">
          <label for="tipo">Tipo de Desconto</label>
          <select id="tipo" name="tipo">
            <option value="percentual">Porcentagem (%)</option>
            <option value="valor">Valor Fixo (R$)</option>
          </select>
        </div>

        <div class="grupo-form">
          <label for="valor">Valor do Desconto</label>
          <input type="number" id="valor" name="valor" placeholder="Ex: 10" step="0.01">
        </div>

        <div class="grupo-form">
          <label for="validade">Data de Validade</label>
          <input type="date" id="validade" name="validade">
        </div>

        <div class="grupo-form">
          <label for="quantidade">Quantidade de Usos</label>
          <input type="number" id="quantidade" name="quantidade" placeholder="Ex: 50">
        </div>

        <div class="grupo-form">
          <label for="status">Status</label>
          <select id="status" name="status">
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
          </select>
        </div>

        <button type="submit" class="btn-principal">Criar Cupom</button>
      </form>

      <!-- ===== LISTA DE CUPONS ===== -->
      <div class="lista-cupom">
        <div class="top-bar">
          <input type="search" placeholder="Pesquisar cupom..." id="pesquisa-cupom">
        </div>

        <table>
          <thead>
            <tr>
              <th>Código</th>
              <th>Tipo</th>
              <th>Valor</th>
              <th>Validade</th>
              <th>Qtd Usos</th>
              <th>Status</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>NICK10</td>
              <td>Percentual</td>
              <td>10%</td>
              <td>2025-12-31</td>
              <td>100</td>
              <td><span class="status ativo">Ativo</span></td>
              <td>
                <button class="btn-editar"><i class="fa-solid fa-pen"></i></button>
                <button class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
              </td>
            </tr>
            <tr>
              <td>NICK20</td>
              <td>Valor Fixo</td>
              <td>R$ 20</td>
              <td>2025-10-31</td>
              <td>50</td>
              <td><span class="status inativo">Inativo</span></td>
              <td>
                <button class="btn-editar"><i class="fa-solid fa-pen"></i></button>
                <button class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

<?php $this->end(); ?>
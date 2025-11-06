<?php $this->layout("_theme", ["title" => "Cupons"]); ?>

<?php $this->start("specific-style"); ?>
<link rel="stylesheet" href="<?= url("assets/admin/css/customer.css") ?>">
<?php $this->end(); ?>

<?php $this->start("main"); ?>

<section class="clientes-admin">

  <!-- ===== BARRA DE PESQUISA ===== -->
  <div class="top-bar">
    <input type="search" placeholder="Pesquisar cliente..." id="pesquisa-clientes">
  </div>

  <!-- ===== LISTA DE CLIENTES ===== -->
  <div class="lista-clientes">
    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Tipo</th>
          <th>Status Financeiro</th>
          <th>Pedidos</th>
          <th>Data Cadastro</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Maria Silva</td>
          <td>maria@email.com</td>
          <td>(11) 91234-5678</td>
          <td><span class="tipo premium">Premium</span></td>
          <td><span class="status em-dia">Em dia</span></td>
          <td>12</td>
          <td>2024-02-15</td>
          <td>
            <button class="btn-editar"><i class="fa-solid fa-pen"></i></button>
            <button class="btn-visualizar"><i class="fa-solid fa-eye"></i></button>
            <button class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
        <tr>
          <td>João Costa</td>
          <td>joao@email.com</td>
          <td>(21) 99876-5432</td>
          <td><span class="tipo regular">Regular</span></td>
          <td><span class="status devedor">Devedor</span></td>
          <td>3</td>
          <td>2024-05-10</td>
          <td>
            <button class="btn-editar"><i class="fa-solid fa-pen"></i></button>
            <button class="btn-visualizar"><i class="fa-solid fa-eye"></i></button>
            <button class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<?php $this->end(); ?>